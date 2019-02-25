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

            //query
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('Id', $ID);
            // $this->db->where;
            
            // Run the query
            $query = $this->db->get();

            //if there are any results
            if($query==true)
            {
                $row = $query->row();
                if (password_verify($password, $row->Password))
                {
                    //Create session data
                    $data = array(
                            'userid' => $row->ID,
                            'username' => $row->Names,
                            'email' => $row->Email,
                            );
                    $this->session->set_userdata($data);

                    echo "<script language='javascript'>
                        alert('Successful Login!');
                        window.location='../Login/home';
                        </script>";	
                    
                        // echo $this->session->userdata('username');
                        // print_r($_SESSION);
                }
                else 
                {
                    echo "<script language='javascript'>
                    alert('Incorrect Password. Please try again.');
                    window.location='../Login/';
                    </script>";	
                }
            }
            else 
            {
                echo "<script language='javascript'>
                    alert('Error! Incorrect ID');
                    window.location='../Login';
                    </script>";	
            }
        }
    }
    