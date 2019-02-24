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

        public function form_validation()
		{
			$this->load->library('form_validation');
			$this->load->helper(array('form', 'url'));

			$this->form_validation->set_rules('pass1', 'Password', 'required|min_length[8]', array("required"=>"Minimum length is 8 characters"));
			$this->form_validation->set_rules('pass2', 'Confirm Password', 'required|matches[pass1]', array("required"=>"The two passwords do not match"));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array("required"=>"Please use a valid email address"));
            $this->form_validation->set_rules('sex', 'Gender', 'required', array("required"=>"Please select your gender"));

			if ($this->form_validation->run() == FALSE)
			{ 
                $this->load->view('signup');
			}
				
			else
			{
				$this->load->model('mdl_register');
				$data = array (
					$id=$this->input->post('ID'),
					$name=$this->input->post('names'),
					$email=$this->input->post('email'),
                    $sex=$this->input->post('sex'),
                    $dob=$this->input->post('dob'),
                    $uPass=$this->input->post('pass1'),
					$pass=password_hash($uPass, PASSWORD_BCRYPT)
				);

				$this->mdl_register->saverecords($data);	
			}
		}
    }


?>