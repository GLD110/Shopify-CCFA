<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Progressbar extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Settings_model');
        $this->load->model( 'Order_model' );  
        $this->load->model( 'Product_model' );
    }
    
    public function index(){
        $this->is_logged_in();
        
        $this->styles();
    }

    function settings(){
        // Check the login
        $this->is_logged_in();
        
        $store = $this->session->userdata( 'shop' );
        $data['settings'] =  $this->Settings_model->getSettingsValue($store);
        $data['lastorder'] =  $this->getLastOrder($variant_id = '');
        
        //$this->load->view('view_header1');
        $this->load->view('view_progressbar_settings', $data);
        //$this->load->view('view_footer1');
    }
    
    function styles(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();
        $data['lastorder'] =  $this->getLastOrder($variant_id = '');
        //$this->load->view('view_header');
        $this->load->view('view_progressbar_styles', $data);
        //$this->load->view('view_footer');
    }
    
    function advanced(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();
        $data['lastorder'] =  $this->getLastOrder($variant_id = '');
        //$this->load->view('view_header');
        $this->load->view('view_progressbar_advanced', $data);
        //$this->load->view('view_footer');
    }    
   
    function updateSlider(){
        // Check the login
        $this->is_logged_in();
        
        $store = $this->session->userdata( 'shop' );
        
        //var_dump($this->input->post());exit;
        
        $return = $this->Settings_model->update( 
            array(
                'shop' => $store,
                'slider_margin' => $this->input->post('slider_margin'),
                'above_text' => $this->input->post('above_text'),
                'font_color' => $this->input->post('font_color'),
                'text_font' => $this->input->post('text_font')                 
                 )
        );
        //if($return == true){
            redirect('/progressbar/settings');
        //}
    }
    
    function getLastOrder( $variant_id ){
        $last_order = $this->Order_model->getLastOrder($variant_id);
        $variant_image = $this->Product_model->getImageFromVaraint($last_order->variant_id);
        $last_order->image = $variant_image;
        return $last_order;
    }   
    
    public function getRecentOrder(){
        
        // Define a header
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST");
        header('Content-Type: application/json');
        
        if($this->input->post() != null)
        {
            $variant_id = $this->input->post('variant_id');
        }
        
        $lastOrder = $this->Order_model->getLastOrder($variant_id);
        $variant_image = $this->Product_model->getImageFromVaraint($last_order->variant_id);
        
        $arr[0] = $lastOrder->customer_name;
        $arr[1] = $lastOrder->country;
        $arr[2] = $lastOrder->product_name;
        $arr[3] = $lastOrder->$variant_image;

        echo json_encode($arr);
        exit();
    }      
}            

