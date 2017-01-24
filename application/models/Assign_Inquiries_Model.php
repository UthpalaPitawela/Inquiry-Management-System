<?php
class Assign_Inquiries_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getUsers()
	{
		$query = $this->db->query("SELECT first_name,last_name,email FROM user WHERE status=3 or status=4");
		return $query->result();
	}

	function getInquiries(){
		$query = $this->db->query("SELECT Fname,Lname,Email,Intake,r_id FROM register WHERE CounsellorName IS NULL AND Status = 'Pending'");
		return $query;
	}

	function updateInquiries($counsellorname,$rid){
		$data = array(
               'CounsellorName' => $counsellorname
              
            );

		$this->db->where('r_id', $rid);
		$this->db->update('register', $data); 
	}

	function viewPending(){
		$query = $this->db->query("SELECT Fname,Lname,Email,Intake,CounsellorName FROM register WHERE Status = 'Pending' AND CounsellorName IS NOT NULL");
		return $query;
	}

	function viewFollowing(){
		$query = $this->db->query("SELECT Fname,Lname,Email,Intake,CounsellorName FROM register WHERE Status = 'Following' AND CounsellorName IS NOT NULL");
		return $query;
	}

}


?>










