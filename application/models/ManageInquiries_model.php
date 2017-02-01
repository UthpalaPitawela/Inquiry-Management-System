<?php

class ManageInquiries_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function getPostsHigh(){
		//Select the fields
		$status = "Following";
		$intake = "high";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName,Summary1,Summary2,Summary3,Summary4");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	}

	function getPostsMedium(){
		//Select the fields
		$status = "Following";
		$intake = "medium";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName,Summary1,Summary2,Summary3,Summary4");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	} 


	function getPostsLow(){
		//Select the fields
		$status = "Following";
		$intake = "low";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName,Summary1,Summary2,Summary3,Summary4");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	}

	function getPending(){
		$status = "Pending";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Intake,Pdate,CounsellorName,Summary1,Summary2,Summary3,Summary4");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query->result();
	}

	function getCompleted(){
		$status = "Completed";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName,Summary1,Summary2,Summary3,Summary4");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query->result();
	}

	function getCompletedforadmissionofficer(){
		$status = "Completed";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName,Summary1,Summary2,Summary3,Summary4");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query;
	}



}

?>