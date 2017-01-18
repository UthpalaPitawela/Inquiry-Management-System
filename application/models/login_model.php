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
}
?>