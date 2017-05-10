<?php
class Counsellor_Profile_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Counsellor_Profile_Model');
		$this->load->model("Student_Data_Model");
	}
	function index($name,$lname){
		$counsellorname = $name." ".$lname; 
		 $data['remiderstudent'] = $this->Student_Data_Model->get_Student_For_Counsellor($counsellorname);
		$val = $this->Counsellor_Profile_Model->getActivitySummary($counsellorname);
		if($val == null){
			$data['result'] = 0;
		}else{
			$data['result'] = $val[0];
		}
		
		$this->load->view('Counsellor_Profile',$data);
	}
}


		 