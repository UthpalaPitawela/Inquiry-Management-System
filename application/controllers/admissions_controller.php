<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class admissions_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of admissions
		$this->load->model('admissions_model');
		
	}

	public function index()
	{
		$this->data['posts'] = $this->admissions_model->getRegistered();
		$this->load->view('admissions_view', $this->data);
	}

	public function deleteStudent()
	{
		$id = $this->input->post('id');
		$this->load->model('admissions_model');
		$this->admissions_model->deleteStudent($id);
		
	}

}


?>