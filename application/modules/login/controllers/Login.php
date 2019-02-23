<?php

    class Login extends MX_Controller {

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

        function index()
        {
            $this->load->view('signin');
        } 

        function home()
        {
            $this->load->view("index");
        }
    }


?>