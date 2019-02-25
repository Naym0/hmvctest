<?php

    class Login extends MX_Controller {

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

        function index()  //controller to load registration page
        {
            $this->load->view('signin');
        } 

        function home()  //controller to load landing page
        {
            $this->load->library('session');
            $this->load->view("index");
        }

        function auth()  //login contoller
        {
            $this->load->library('session');
			$this->load->model('mdl_login');
			
			$ID=$this->input->post("ID");
			$password=$this->input->post("pass");

            $this->mdl_login->authenticate($ID,$password);
        }

        function logout()  //controller to logout
        {
            $this->session->sess_destroy();
            $this->load->view('signin');
            echo "<script language='javascript'>
                    alert('Thank you for visiting');
                    window.location='../Login';
                    </script>";	        
        }
    }


?>