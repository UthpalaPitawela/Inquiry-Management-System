<?php
class Login_Model extends CI_Model{
	function check_login($username,$password){
		

		$query = $this->db->query("SELECT status,first_name,u_id,profilepicture FROM user WHERE username= '$username' AND password = '$password'");
        return $query;
        
	}
}
?>