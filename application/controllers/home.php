<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

   public function __construct() {
       parent::__construct();
       $this->load->model('User_model'); 
       $this->load->model( 'Order_model' );      
   }

   public function index(){
        
      // APP Redirect
      if( $this->config->item('PUBLIC_MODE')  )
      {
        // Set the shop domain from session or get
        $shop_domain = $this->session->userdata( 'shop' ) != '' ? $this->session->userdata( 'shop' ) : '';
        if( $this->input->get('shop') != '' ) $shop_domain = $this->input->get('shop');
        
        // Get the access token from database
        $access_token = '';
        if( $shop_domain != '' ){
          $this->load->model( 'Shopify_model' );
          $access_token = $this->Shopify_model->getAccessToken( $shop_domain );
        }

        // Check the cookie / Check the token is valid!!!
        if( $access_token == '' )
        {
          // If the acess_token is missing from database, then install the app
          if( $shop_domain == '' )
          {
            $data['shop'] = '';
            $this->load->view('view_newstore', $data );   
          }
          else
          {
            redirect( 'newstore/register?shop=' . $shop_domain );
          }
        }
        else
        {
          // Save the access token and shop domain
          $this->session->set_userdata( array( 
            'shop' => $shop_domain, 
            'access_token' => $access_token 
          ));   
        }
      }
      else
      {
        $this->session->set_userdata( array( 
            'shop' => $this->config->item('PRIVATE_SHOP'), 
        ));
      }      
      
      if( $this->session->userdata( 'shop' ) != '' )
      {
        // Check Login
        $this->is_logged_in();
          
        // Define the search values
        $this->_searchConf  = array(
          'customer_name' => '',
          'order_name' => '',
          'shop' => $this->session->userdata( 'shop' ),
          'created_at' => '',
          'sort_field' => 'created_at',
          'sort_direction' => 'DESC',
        );
        $this->_searchSession = 'order_sels';            
          
        //order sync  
        //$this->sync(); 
        
        //product sync  
        //$this->product_sync();  
          
        $this->manage();
      }
   }
    
  public function manage( $page =  0 ){ 
              
    $this->_searchVal['shop'] = trim( $this->_searchVal['shop'], 'http://' );
    $this->_searchVal['shop'] = trim( $this->_searchVal['shop'], 'https://' );
    
    // Check the login
    $this->is_logged_in();

    // Init the search value
    $this->initSearchValue();

    // Get data ,will modify and use later 
    $arrCondition =  array(
       'customer_name' => $this->_searchVal['customer_name'],
       'order_name' => $this->_searchVal['order_name'],       
       'created_at' => $this->_searchVal['created_at'],         
       'sort' => $this->_searchVal['sort_field'] . ' ' . $this->_searchVal['sort_direction'],
    );
      
    $this->Order_model->rewriteParam($this->session->userdata( 'shop' ));
    $data['query'] =  $this->Order_model->getList( $arrCondition );
    $data['total_count'] = $this->Order_model->getTotalCount();
    $data['page'] = $page;  
    
    // Define the rendering data
    $data = $data + $this->setRenderData();

    // Load Pagenation
    $this->load->library('pagination');

    // Renter to view
    //$this->load->view('view_header');  
    $this->load->view('view_home', $data );
    //->load->view('view_footer');  
  }    
    
   public function login(){
        $this->load->helper('cookie');
        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE){
            echo validation_errors ('<div class="alert alert-dismissable alert-danger"><small>', '</small></div>' );
        } 
        else
        {
            $name = $this->input->post('username');
            $password = $this->input->post('password');

            $loginCheck = $this->User_model->auth($name, $password);
            if( $loginCheck !== false ){
                
                // Set the cookie
                $this->input->set_cookie( $this->config->item('loginCookie'), $loginCheck );
            }
            else{
                echo'<div class="alert alert-dismissable alert-danger"><small>Please Check User Email or Password</small></div>' . $name;
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        delete_cookie();
        
        redirect('home' ,'refresh');
        exit;
    }
        
    public function sign_in()
    {
        $this->load->view('view_login');   
    }
        
    public function sign_up()
    {
      $this->load->view('view_register');  
    }
    
    public function sync()
    {
        $this->load->model( 'Shopify_model' );
        $this->load->model( 'Order_model' );

        $this->Order_model->rewriteParam($this->session->userdata( 'shop' ));

        $cntNewOrder = 0;
        
        // Get the lastest day
        $last_day = $this->Order_model->getLastOrderDate();
        
        $param = 'status=any';
        if( $last_day != '' ) $param .= '&processed_at_min=' . urlencode( substr($last_day, 0, 10 ) );
        $action = 'orders.json?' . $param;
        
        // Retrive Data from Shop
        $orderInfo = $this->Shopify_model->accessAPI( $action );
        
        foreach( $orderInfo->orders as $order )
        {
             $this->Order_model->add( $order );
        }     

//        echo '<div class="alert alert-success">' . $cntNewOrder . ' order(s) are downloaded successfully</div>';
        return true;
    }
    
    public function product_sync( $page = 1 )
    {
        $this->load->model( 'Shopify_model' );
        $this->load->model( 'Product_model' );
        $this->Product_model->rewriteParam($this->session->userdata( 'shop' ));    

        // Get the lastest day
        $last_day = $this->Product_model->getLastUpdateDate();

        // Retrive Data from Shop
        $count = 0;

        // Make the action with update date or page
        $action = 'products.json?';
        if( $last_day != '' && $last_day != $this->config->item('CONST_EMPTY_DATE') && $page == 1 )
        {
          $action .= 'limit=250&updated_at_min=' . urlencode( $last_day );
        }
        else
        {
          $action .= 'limit=10&page=' . $page;
        } 

        // Retrive Data from Shop
        $productInfo = $this->Shopify_model->accessAPI( $action );

        // Store to database
        if( isset($productInfo->products) && is_array($productInfo->products) )
        {
          foreach( $productInfo->products as $product )
          {
            $this->Product_model->addProduct( $product );
          }
        }

        // Get the count of product
        if( $last_day != '' && $last_day != $this->config->item('CONST_EMPTY_DATE') && $page == 1 )
        {
          $count = 0;
        }
        else
        {
          if( isset( $productInfo->products )) $count = count( $productInfo->products );
          $page ++;  
        }

        if( $count == 0 )
          echo 'success';
        else
          echo $page . '_' . $count;
    }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */