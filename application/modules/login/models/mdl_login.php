<?php

    class mdl_login extends CI_Model{

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

        function authenticate() 
        {   
            $ID=$this->input->post("ID");
            $password=$this->input->post("pass");
            $pass=password_hash($password, PASSWORD_BCRYPT);

			$this->db->select('ID','Names','Password');
			$this->db->from('users');
            $this->db->where(array ('ID' => $ID, 'Password' => $pass));
            
			$query = $this->db->get();
			$queryResult = $query->result_array();
            
			if ($query == true)
			{
                    $this->session->set_userdata('Id', '$ID');	
                    $this->session->sess_expiration = '10';
                    echo "<script language='javascript'>
                    alert('Successful Login!');
                    window.location='../Login/home';
                    </script>";	     
            
                // else 
                // {
                //     echo "<script language='javascript'>
                //     alert('Incorrect Password. Please try again.');
                //     window.location='../Login';
                //     </script>";
                // }
            }
            else
            {
                "<script language='javascript'>
                    alert('Incorrect Login. Please try again.');
                    window.location='../Login';
                 </script>";
            }
        }
    }
    