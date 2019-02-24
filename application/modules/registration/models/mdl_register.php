<?php

    class mdl_register extends CI_Model{

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

        function saverecords($data)
        {
            $data = array (
                $id=$this->input->post('ID'),
                $name=$this->input->post('names'),
                $email=$this->input->post('email'),
                $sex=$this->input->post('sex'),
                $dob=$this->input->post('dob'),
                $uPass=$this->input->post('pass1'),
                $pass=password_hash($uPass, PASSWORD_BCRYPT)
            );

            $query="INSERT INTO users VALUES('$id','$name','$email','$sex','$dob','$pass')";
            $this->db->query($query);

            echo "<script language='javascript'>
                    alert('Successful Registration');
                    window.location='../Login';
                 </script>";
	    }
        
    }

?>