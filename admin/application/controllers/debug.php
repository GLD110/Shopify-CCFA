<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Debug extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
//        $this->load->model('Settings_model');
    }
    
    public function index(){
        $this->is_logged_in();
        
        $this->manageSettings();
    }

    function manageSettings(){
        // Check the login
        $this->is_logged_in();

//        $data['query'] =  $this->Settings_model->getList();
        $this->load->view('view_header');
        $this->load->view('view_debug');
        $this->load->view('view_footer');
    }
   
}            

