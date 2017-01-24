<?php

class manageInquiries_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function getPostsHigh(){
		//Select the fields
		$status = "Pending";
		$intake = "high";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	}

	function getPostsMedium(){
		//Select the fields
		$status = "Pending";
		$intake = "medium";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	} 


	function getPostsLow(){
		//Select the fields
		$status = "Pending";
		$intake = "low";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	}

	function getFollowing(){
		$status = "Following";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Intake,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query->result();
	}

	function getCompleted(){
		$status = "Completed";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query->result();
	}



}

?>