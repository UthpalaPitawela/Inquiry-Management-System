<?php
class Manager_Settings_Model extends CI_Model{
	function changePassword($password){
		$data = array(
			'password' => $password
			);
		
		$this->db->where('username', 'manager');
		$this->db->update('user', $data);

	}
}
?>