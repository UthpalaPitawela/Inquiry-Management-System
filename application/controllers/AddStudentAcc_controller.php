<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class AddStudentAcc_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('AddStudentAcc_model');
		$this->load->model("Student_Data_Model");
		
	}

	public function index()
	{
		  $user_Id= $_SESSION["user_ID"];


		$data['admissionstudent'] = $this->Student_Data_Model->get_Student_Data($user_Id);
   
        // $this->load->view('Admission_Officer_Student_list',$data);


		$this->load->view('addStudentAcc_view',$data);


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
		$this->AddStudentAcc_model->insertdata($data);

		redirect("AddStudentAcc_controller/index");
	}

}


?>