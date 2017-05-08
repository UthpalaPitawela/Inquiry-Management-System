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
		
		$query = $this->db->query("SELECT Fname,Lname,Email,Intake,r_id FROM register WHERE CounsellorName IS NULL AND Status = 'Pending' AND web = 0");
		$count = 0;
		foreach($query->result() as $row){
			$count++;
		}
		$data = array(
			'count' => $count
			);
		return $data;
	

	}

	function updateInquiries($counsellorname,$inqcount){
		$query = $this->db->query("SELECT r_id FROM register WHERE Status = 'Pending' AND CounsellorName IS NULL AND web = 0 ");
		$count = 0;
		$data  = array();
		foreach ($query->result() as $row) {
			$data[$count] = $row->r_id;
			$count++; 
			}

		for($i=0;$i<$inqcount;$i++){
			 $query = $this->db->query("UPDATE register SET CounsellorName='$counsellorname' WHERE r_id = $data[$i]");
			}
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










