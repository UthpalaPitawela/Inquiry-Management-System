<?php

class ManageInquiriesCoun_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

function searchStudent($searchkey){


     $searchresult = $this->db->like('Fname', $searchkey,'after')->or_like('Lname',$searchkey,'after')->get('register');

    return $searchresult->result();


  }

 function searchStudentbyNO($searchkey){


     $searchresult = $this->db->like('Contactno', $searchkey,'after')->or_like('Contactno',$searchkey,'after')->get('register');

    return $searchresult->result();


  }
 function getProgrammeStudents($searchkey,$counsellorname){

$query=$this->db->query("SELECT * FROM register WHERE CounsellorName='$counsellorname' AND (pref1='$searchkey' OR pref2='$searchkey')");
	//WHERE pref1=$searchkey OR pref2=$searchkey AND CounsellorName="Randhaja Malshan" ');
 //$this->db->select('*')->from('register')->where('CounsellorName', $counsellorname)->where('pref1', $searchkey)->or_where('pref2', $searchkey);
    

//    $query =$this->db->get();
return $query->result();
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

	function getAllFollowing($counsellorname){
				$status = "Following";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName,call_count,sms_count,email_count");
		$query = $this->db->get_where('register',array('status'=>$status,'CounsellorName'=>$counsellorname));
		return $query;
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