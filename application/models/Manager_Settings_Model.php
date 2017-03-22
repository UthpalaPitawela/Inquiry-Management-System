<?php
class Manager_Settings_Model extends CI_Model{
	//The database code to change password
	function changePassword($password,$username){
		$data = array(
			'password' => $password
			);

		$this->db->where('username', $username);
		return $this->db->update('user', $data);

	}
	//The database code to add user functions 
	function addUser($fname,$lname,$status,$email,$username,$password){
		$data = array(
			'first_name' => $fname,
			'last_name' => $lname,
			'status' => $status,
			'email'=> $email,
			'username' => $username,
			'password' => $password

			);
		return $this->db->insert('user',$data);
	}

	function getUsers(){
		$this->db->select('first_name,last_name,u_id');
		$query = $this->db->get('user');
		return $query->result();
	}

	function getUsername($uid){
		$this->db->select('username');
		$query = $this->db->get_where('user',array('u_id'=>$uid));
		foreach($query -> result() as $row){
			$data = array(
					'username' => $row->username,
				

					);
				}
		return $data;
		
	}
}

?>