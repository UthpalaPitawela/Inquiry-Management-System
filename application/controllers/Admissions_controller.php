<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admissions_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of admissions
		$this->load->model('Admissions_model');
		
	}

	public function index()
	{
		$this->data['posts'] = $this->Admissions_model->getRegistered();
		$this->load->view('admissions_view', $this->data);
	}

	public function admissionsofficeradmissions(){

		$this->data['posts'] = $this->Admissions_model->getRegistered();
		$this->load->view('admissionofficeradmissions', $this->data);	
	}

	public function deleteStudent()
	{
		$id = $this->input->post('id');
		$this->load->model('admissions_model');
		$this->Admissions_model->deleteStudent($id);
		
	}

}


?>