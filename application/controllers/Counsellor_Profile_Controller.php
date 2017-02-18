<?php
class Counsellor_Profile_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Counsellor_Profile_Model');

	}
	function index($name,$lname){
		$counsellorname = $name." ".$lname; 
		$val = $this->Counsellor_Profile_Model->getActivitySummary($counsellorname);
		$data['result'] = $val[0];
		$this->load->view('counsellor_profile',$data);
	}
}


		