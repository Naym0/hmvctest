<?php

    class Registration extends MX_Controller {

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

        function index()
        {
            $this->load->view('signup');
        } 
    }


?>