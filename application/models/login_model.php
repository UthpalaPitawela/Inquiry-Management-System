<?php
class Login_Model extends CI_Model{
	function check_login($username,$password){
		

		$query = $this->db->query("SELECT status FROM user WHERE username= '$username' AND password = '$password'");
        return $query;
        //if ($query->num_rows() > 0) {
          //  return true;
        //} else {
          //  return false;
        //}
	}
}
?>