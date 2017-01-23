<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class addStudentAcc_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('addStudentAcc_model');
		
	}

	public function index()
	{
		//load the view
		$this->load->view('addStudentAcc_view');
	}

	public function addstudent()
	{
		//get form data to an array named $data
		$data = array(
			'user_name' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'dob' => $this->input->post('dob'),
			'tpnumber' => $this->input->post('contact'));

		//transferring data to model
		$this->addStudentAcc_model->insertdata($data);

		redirect("addStudentAcc_controller/index");
	}

}


?>