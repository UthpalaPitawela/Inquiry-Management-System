<?php

class ManageInquiries_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function getPostsHigh(){
		//Select the fields
		$status = "Following";
		$intake = "high";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	}

	function getPostsMedium(){
		//Select the fields
		$status = "Following";
		$intake = "medium";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	} 


	function getPostsLow(){
		//Select the fields
		$status = "Following";
		$intake = "low";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName");
		$query = $this->db->get_where('register',array('intake'=>$intake,'status'=>$status));
		

		return $query->result();
	}

	function getPending(){
		$status = "Pending";
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

	function getCompletedforadmissionofficer(){
		$status = "Completed";
		$this->db->select("Fname,Lname,OL,Grade1,Grade2,Grade3,r_id,Contactno,Email,Pdate,CounsellorName,account_created");
		$query = $this->db->get_where('register',array('status'=>$status));

		return $query;
	}

	function updateChanges($data,$id){
	
		$this->db->where('r_id', $id);
		$this->db->update('register', $data); 

	}

	function viewSummary($rid){
		$bool=0;
		//$data = array();
		$this->db->select('summary_call1,summary_call1_date');
		$this->db->where('summary_call1 !=', NULL);
		$count = 0;
		$query= $this->db->get_where('register',array('r_id'=>$rid));
		foreach($query -> result() as $row){
			$bool=1;
			$data[$count]= array(
			'summary' => $row->summary_call1,
			'date' => $row-> summary_call1_date,
			'mode'=>'call'
			);
			$count++;
				}

		$this->db->select('summary_call2,summary_call2_date');
		$this->db->where('summary_call2 !=', NULL);
		$query2 = $this->db->get_where('register',array('r_id'=>$rid));
		foreach($query2 -> result() as $row){
			$bool=1;
			$data[$count] = array(
			'summary' => $row->summary_call2,
			'date' => $row-> summary_call2_date,
			'mode' => 'call'
			);
			$count++;
				}

		$this->db->select('summary_sms1,summary_sms1_date');
		$this->db->where('summary_sms1 !=', NULL);
		$query3 = $this->db->get_where('register',array('r_id'=>$rid));
		foreach($query3 -> result() as $row){
			$bool=1;
			$data[$count] = array(
			'summary' => $row->summary_sms1,
			'date' => $row-> summary_sms1_date,
			'mode'=>'sms'

			);
			$count++;
				}

		$this->db->select('summary_sms2,summary_sms2_date');
		$this->db->where('summary_sms2 !=', NULL);
		$query4 = $this->db->get_where('register',array('r_id'=>$rid));
		foreach($query4 -> result() as $row){
			$bool=1;
			$data[$count] = array(
			'summary' => $row->summary_sms2,
			'date' => $row-> summary_sms2_date,
			'mode' => 'sms'
			);
			$count++;
				}

		$this->db->select('summary_email1,summary_email1_date');
		$this->db->where('summary_email1 !=', NULL);
		$query5 = $this->db->get_where('register',array('r_id'=>$rid));
		foreach($query5 -> result() as $row){
			$bool=1;
			$data[$count] = array(
			'summary' => $row->summary_email1,
			'date' => $row-> summary_email1_date,
			'mode' => 'email'
			);
			$count++;
				}

		$this->db->select('summary_email2,summary_email2_date');
		$this->db->where('summary_email2 !=', NULL);
		$query6 = $this->db->get_where('register',array('r_id'=>$rid));
		foreach($query6 -> result() as $row){
			$bool=1;
			$data[$count] = array(
			'summary' => $row->summary_email2,
			'date' => $row-> summary_email2_date,
			'mode' => 'email'
			);
			$count++;
				}

		$this->db->select('summary_other1,summary_other1_date');
		$this->db->where('summary_other1 !=', NULL);
		$query7 = $this->db->get_where('register',array('r_id'=>$rid));
		foreach($query7 -> result() as $row){
			$bool=1;
			$data[$count] = array(
			'summary' => $row->summary_other1,
			'date' => $row->summary_other1_date,
			'mode' =>'other'
			);
			$count++;
				}
	
		if ($bool==1){
		foreach ($data as $key => $row) {
		    $date[$key]  = $row['date'];
		    $summary[$key] = $row['summary'];
		    $mode[$key] = $row['mode'];
		}
		array_multisort($date, SORT_ASC, $data);
		}else{
			$data = null;
		}			
		return $data;
			
	}

	function viewStudentDetails($rid){
		$this->db->select('Fname,Lname,Country,Email,Contactno,Intake,Pdate');
		$query = $this->db->get_where('register',array('r_id' => $rid));
		foreach ($query -> result() as $row) {
			$data = array(
				'fname' =>$row->Fname,
				'lname' => $row->Lname,
				'country' => $row->Country,
				'email' =>$row->Email,
				'contactno' => $row->Contactno,
				'intake' => $row->Intake,
				'pdate' => $row->Pdate

				);
		}
		return $data;
	}



 
}

?>