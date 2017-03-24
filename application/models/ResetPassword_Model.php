<?php
class ResetPassword_Model extends CI_Model{
	function changePassword($password,$uid){
		$data = array(
			'password' => $password
			);

		$this->db->where('u_id', $uid);
		$this->db->update('user', $data);

	}
}

?>