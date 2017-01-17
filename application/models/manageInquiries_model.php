<?php

class manageInquiries_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function getPostsHigh(){
		//Select the fields
		$intake = "high";
		$this->db->select("Fname,Lname,OL,Grade1,Contactno,Email,Pdate");
		$query = $this->db->get_where('register',array('intake'=>$intake));
		

		return $query->result();
	}

	function getPostsMedium(){
		//Select the fields
		$intake = "medium";
		$this->db->select("Fname,Lname,OL,Grade1,Contactno,Email,Pdate");
		$query = $this->db->get_where('register',array('intake'=>$intake));
		

		return $query->result();
	}



}

?>