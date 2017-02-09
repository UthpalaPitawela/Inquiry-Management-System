<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class AdmissionsCoun_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of admissions
		$this->load->model('AdmissionsCoun_model');
		
	}
 
	public function index()
	{
		$counsellorname = $_SESSION["first_username"]." ".$_SESSION["last_username"];
		$this->data['posts'] = $this->AdmissionsCoun_model->getRegistered($counsellorname);
		$this->load->view('admissionsCoun_view', $this->data);
	}

	// public function admissionsofficeradmissions(){

	// 	$this->data['posts'] = $this->Admissions_model->getRegistered();
	// 	$this->load->view('admissionofficeradmissions', $this->data);	
	// }

	public function deleteStudent()
	{
		$id = $this->input->post('id');
		$this->load->model('AdmissionsCoun_model');
		$this->AdmissionsCoun_model->deleteStudent($id);
		
	}

}


?>