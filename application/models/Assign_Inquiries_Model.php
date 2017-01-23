<?php
class Assign_Inquiries_Model extends CI_Model{
	function index(){
	/*	$this->db->select('first_name,last_name,email');
		
		$this->db->where('status',3);
		$query = $this->db->get('user');
		foreach ($query -> result() as $row) {
			$data[] = array(
				'fname' => $row->first_name,
				'lname' => $row->last_name,
				'email' => $row->email
				);
		}
		return $data;*/
		    $this->db->select('first_name,last_name,email');
        $this->db->where('status',3);
        $query = $this->db->get('user');
        return $query ->result_array();
	}
}


?>










