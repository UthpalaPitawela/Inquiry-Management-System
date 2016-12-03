<?php
class Manager_Settings_Model extends CI_Model{
	function changePassword($password){
		$data = array(
			'password' => $password
			);

		$this->db->where('username', 'manager');
		$this->db->update('user', $data);

	}

	function addUser($fname,$lname,$status,$username,$password){
		$data = array(
			'first_name' => $fname,
			'last_name' => $lname,
			'status' => $status,
			'username' => $username,
			'password' => $password

			);
		$this->db->insert('user',$data);
	}
}
?>