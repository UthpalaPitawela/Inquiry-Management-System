<?php
class Web_Inquiries_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getUsers()
	{
		$query = $this->db->query("SELECT first_name,last_name,email FROM user WHERE status=3 or status=4");
		return $query->result();
	}

	function getInquiries(){
		$query = $this->db->query("SELECT Fname,Lname,Email,Contactno,Intake,r_id FROM register WHERE CounsellorName IS NULL AND Status = 'Pending' AND web  = 1 ");
		return $query;
	}

		function updateInquiries($counsellorname,$val){
		foreach($val as $num){
		$data = array(
               'CounsellorName' => $counsellorname
              
            );
													
		$this->db->where('r_id', $num);
		$this->db->update('register', $data);
		} 
	}

}


?>










