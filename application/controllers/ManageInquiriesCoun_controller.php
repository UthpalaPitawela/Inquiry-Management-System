<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ManageInquiriesCoun_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('ManageInquiriesCoun_model');
		
	}

	public function index()
	{
		$counsellorname = $_SESSION["first_username"]." ".$_SESSION["last_username"];
		$this->data['posts'] = $this->ManageInquiriesCoun_model->getPostsHigh($counsellorname);
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiriesCoun_model->getPostsMedium($counsellorname);
		$this->data['posts2'] = $this->ManageInquiriesCoun_model->getPostsLow($counsellorname);
		$this->data['posts3'] = $this->ManageInquiriesCoun_model->getPending($counsellorname);
		$this->data['posts4'] = $this->ManageInquiriesCoun_model->getCompleted($counsellorname);
		$this->load->view('manageInquiriesCoun_view', $this->data);
	}

	// public function completedforadmissionofficer(){

	// 	$this->data['posts4'] = $this->ManageInquiries_model->getCompletedforadmissionofficer();
	// 	$this->load->view('completedforadmissionofficer', $this->data);	
	// }

	//Making the pending entry editable
	public function updateChanges(){

		$id = $this->input->post('rid');
		$data = array(
			
			'Fname' => $this->input->post('Fname'),
			'Lname' => $this->input->post('Lname'),
			'Email' => $this->input->post('Email'),
			'Intake' => $this->input->post('Intake'),
			'Pdate' => $this->input->post('Pdate'));
	//		'CounsellorName' => $this->input->post('CounsellorName'));

		//Transfering data to model
		$this->ManageInquiriesCoun_model->updateChanges($data,$id);

		//Go back to index after inserting
	redirect("index.php/ManageInquiriesCoun_controller/index");
	}
}

?>