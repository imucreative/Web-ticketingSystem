<?php
    ini_set('display_errors',0);
    class Home extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('User_model', 'users');

            if(!$this->session->userdata('userId')){
                redirect('auth/logout');
            }
            
            //if($this->session->userdata('status')!=0){
                //redirect('errors/error_403');
            //}
        }
        function index() {
            $this->template->load('template', 'home');
        }
    }
