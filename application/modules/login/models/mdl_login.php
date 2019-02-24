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

			$this->db->select('*');
			$this->db->from('users');
            $this->db->where(array ('ID' => $ID, 'Password' => $pass));
            
			$query = $this->db->get();
			$queryResult = $query->result_array();
            $user = $query ->row();
			if ($query == true)
			{
				// if(password_verify($_POST['$password'], $user->Password))
				// {
                //     foreach ($queryResult as $user){
                //         $userID= $user['ID'];
                //         $userName = $user['Names'];
                //         $userEmail = $user['Email'];
                //     }
                    
                //     $userArray = array(
                //         'Name' => $userName,
                //         'ID' => $userID,
                //         'Email' => $userEmail
                //     );

                    // $this->session->set_userdata($userArray);	
                    echo "<script language='javascript'>
                    alert('Successful Login!');
                    window.location='../Login/home';
                    </script>";	     
                }
                // else 
                // {
                //     echo "<script language='javascript'>
                //     alert('Incorrect Password. Please try again.');
                //     window.location='../Login';
                //     </script>";
                // }
            
            else
            {
                "<script language='javascript'>
                    alert('Incorrect ID. Please try again.');
                    window.location='../Login';
                 </script>";
            }
        }
    }
    