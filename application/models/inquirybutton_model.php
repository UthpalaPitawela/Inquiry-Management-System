<?php

class inquirybutton_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function following($id){
		//Select the fields
		$newStatus = "Following";
		$data = array('Status'=>$newStatus);
		$this->db->where('Email',$id);
		$this->db->update('register',$data);
	}

	function completed($id){
		//Select the fields
		$newStatus = "Completed";
		$data = array('Status'=>$newStatus);
		$this->db->where('Email',$id);
		$this->db->update('register',$data);
	}

	function registered($id){
		//Select the fields
		$newStatus = "Registered";
		$data = array('Status'=>$newStatus);
		$this->db->where('Email',$id);
		$this->db->update('register',$data);
	}





}

?>