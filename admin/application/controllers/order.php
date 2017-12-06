<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model( 'Order_model' );

    // Define the search values
    $this->_searchConf  = array(
      'customer_name' => '',
      'order_name' => '',
      //'shop' => $this->_default_store,
      'created_at' => '',
      'sort_field' => 'created_at',
      'sort_direction' => 'DESC',
    );
    $this->_searchSession = 'order_sels';
  }

  public function index(){
      $this->is_logged_in();

      $this->manage();
  }

  public function manage( $page =  0 ){

    $this->_searchVal['shop'] = trim( $this->_searchVal['shop'], 'http://' );
    $this->_searchVal['shop'] = trim( $this->_searchVal['shop'], 'https://' );

    // Check the login
    $this->is_logged_in();

    // Init the search value
    $this->initSearchValue();

    // Get data
    $arrCondition =  array(
       'customer_name' => $this->_searchVal['customer_name'],
       'order_name' => $this->_searchVal['order_name'],
       'created_at' => $this->_searchVal['created_at'],
       'sort' => $this->_searchVal['sort_field'] . ' ' . $this->_searchVal['sort_direction'],
    );

    //var_dump($arrCondition);exit;

    $this->Order_model->rewriteParam($this->session->userdata( 'shop' ));
    $data['query'] =  $this->Order_model->getList( $arrCondition );
    $data['total_count'] = $this->Order_model->getTotalCount();
    $data['page'] = $page;

    // Define the rendering data
    $data = $data + $this->setRenderData();

    // Store List
    /*$arr = array();
    foreach( $this->_arrStoreList as $shop => $row ) $arr[ $shop ] = $shop;
    $data['arrStoreList'] = $arr;*/

    // Load Pagenation
    $this->load->library('pagination');

    // Renter to view
    //$this->load->view('view_header');
    $this->load->view('view_order', $data );
    //$this->load->view('view_footer');
  }

  public function sync( $shop )
  {
    $this->load->model( 'Process_model' );

    $this->load->model( 'Shopify_model' );
    $this->Shopify_model->setStore( $shop, $this->_arrStoreList[$shop]->app_id, $this->_arrStoreList[$shop]->app_secret );

    // Get the lastest day
    $this->Order_model->rewriteParam( $shop );
    $last_day = $this->Order_model->getLastOrderDate();

    $param = 'status=any&limit=250';
    if( $last_day != '' ) $param .= '&processed_at_min=' . ( urlencode( $last_day ) );
    $action = 'orders.json?' . $param;

    // Retrive Data from Shop
    $orderInfo = $this->Shopify_model->accessAPI( $action );

     // var_dump($orderInfo);

    foreach( $orderInfo->orders as $order )
    {
      $this->Process_model->order_create( $order, $this->_arrStoreList[$shop] );
    }

    echo 'success';
  }
}
