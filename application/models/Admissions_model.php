<?php

class Admissions_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getRegistered(){
		$status = "Registered";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query->result();
	}


	function deleteStudent($id){
		//Select the fields
		$newStatus = "Deleted";
		$data = array('Status'=>$newStatus);
		$this->db->where('Email',$id);
		$this->db->update('register',$data);
	}


}

?>