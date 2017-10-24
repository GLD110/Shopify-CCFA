<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nopage extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Settings_model');
    }
    
    public function index(){
        $this->is_logged_in();
        
        $this->load->view('404');
    }
}            

