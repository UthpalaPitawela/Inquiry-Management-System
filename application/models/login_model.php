<?php
class Login_Model extends CI_Model{
	function check_login($username,$password){
		

		$query = $this->db->query("SELECT status,first_name,u_id,profilepicture FROM user WHERE username= '$username' AND password = '$password'");
        return $query;
        
	}


	function check_login_student($username,$password){

				// $query = $this->db->query("SELECT firstname,user_name,propic FROM student_table WHERE user_name= '$username' AND password = '$password'");

		$this->db->select('firstname,email,propic')->from('student_table')->where('email', $username)->where('password',$password);
		

		$query =$this->db->get();
        return $query;
        
	}

	function getCourses($username){

				// $query = $this->db->query("SELECT firstname,user_name,propic FROM student_table WHERE user_name= '$username' AND password = '$password'");

		$this->db->select('id')->from('register')->where('Email',$username);
		

		$queryprogid =$this->db->get();

		$query2=array();
		$rowcount2 = $queryprogid->num_rows();
           
          if($rowcount2>0){


               foreach ($queryprogid->result_array() as $row) {



               	?>
    <?php


               		$degreeid=$row['id'];

					$this->db->select('*')->from('programme')->where('id', $degreeid);

					$query2 =$this->db->get();
					
					return $query2;


                }


             }


        
	}


}
?>