<?php

class ManageInquiriesCoun_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function getPostsHigh($counsellorname){
		//Select the fields
		$status = "Following";
		$intake = "high";
		//$counsellor = $_SESSION['first_username']." ".$_SESSION['last_username'];
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status, 'CounsellorName'=>$counsellorname));
		

		return $query->result();
	}

	function getPostsMedium($counsellorname){
		//Select the fields
		$status = "Following";
		$intake = "medium";
		//$counsellor = $_SESSION['first_username']." ".$_SESSION['last_username'];
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status, 'CounsellorName'=>$counsellorname));
		

		return $query->result();
	} 


	function getPostsLow($counsellorname){
		//Select the fields
		$status = "Following";
		$intake = "low";
		//$counsellor = $_SESSION['first_username']+" "+$_SESSION['last_username'];
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status, 'CounsellorName'=>$counsellorname));
		

		return $query->result();
	}

	function getPending($counsellorname){
		$status = "Pending";
		//$counsellorname = $_SESSION['first_username']+" "+$_SESSION['last_username'];
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Intake,Pdate");
		$query = $this->db->get_where('register',array('status'=>$status, 'CounsellorName'=>$counsellorname));

		return $query->result();
	}

	function getCompleted($counsellorname){
		$status = "Completed";
		//$counsellor = $_SESSION['first_username']+" "+$_SESSION['last_username'];
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate");
		$query = $this->db->get_where('register',array('status'=>$status, 'CounsellorName'=>$counsellorname));

		return $query->result();
	}

	function getCompletedforadmissionofficer(){
		$status = "Completed";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query;
	}

	function updateChanges($data,$id){
	
		$this->db->where('r_id', $id);
		$this->db->update('register', $data); 

	}


 
}

?>