<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Liquid extends MY_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model( 'Liquid_model' );
    
    // Define the search values
    $this->_searchConf  = array(
      'type' => 'product',
      'version' => '1.0',
    );
    $this->_searchSession = 'liquid';
  }
  
  public function index(){
    $this->is_logged_in();
    
    $this->manage();
  }

  public function manage(){
    // Check the login
    $this->is_logged_in();

    // Init the search value
    $this->initSearchValue();
    
    // Get data
    if( $this->session->userdata('role') == "admin" )
    {
      $data['arrContent'] =  $this->Liquid_model->getList( $this->_searchVal['type'] );
      $data['isAdmin'] = true;
    }
    else
    {
      $data['arrContent'][] =  $this->Liquid_model->getMyContent( $this->session->userdata('shop'), $this->_searchVal['type'] );
      $data['isAdmin'] = false;
    }

    // Define the rendering data
    $data = $data + $this->setRenderData();
    
    $this->load->view('view_header');
    $this->load->view('view_liquid', $data );
    $this->load->view('view_footer');
  }
  
  public function update( $type ){
//    $data['arrContent'] =  $this->Liquid_model->update( $type, base64_decode( $this->input->post('content') ) );
    $data['arrContent'] =  $this->Liquid_model->update( $type, $this->input->post('content'));
    
    $this->manage();
  }
  
  public function publish( $schema = '', $version = '' ){
    
    // Get the list of stores
    $this->load->model( 'Shopify_model' );
    $arrShop = $this->Shopify_model->getList();

    // Apply to each store      
    foreach( $arrShop as $shop => $access_token ){
      $this->Liquid_model->publish( $shop, $access_token, $schema, $version );
    }
    
    echo 'success';
  }
}            

