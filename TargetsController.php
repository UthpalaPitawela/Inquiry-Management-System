<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class TargetsController extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of targets
		$this->load->model('TargetsModel');
		
	}

	public function index()
	{
		
		$data["fetch_data"] = $this->TargetsModel->get_table(); 
		$this->load->view('TargetsView',$data);
	}

	//Submit data
	public function setTarget()
	{
		$data = array(
			//'TID' => $this->input->post('TID'),
			'EID' => $this->input->post('EID'),
			'E_Name' => $this->input->post('E_Name'),
			'Role' => $this->input->post('Role'),
			'Target' => $this->input->post('Target'),
			'Start_Date' => $this->input->post('Start_Date'),
			'End_Date' => $this->input->post('End_Date'),
			'Assigned_By' => $this->input->post('Assigned_By'));

		//Transfering data to model
		$this->TargetsModel->set_target($data);

		/*
		if($this->TargetsView->add($data)){
			$this->summary();
		}
		else
		{
			echo 'Data not inserted';
		}
		*/
		//Go back to index after inserting
		redirect("TargetsController/index");


	}

	//Retrieve data
	public function summary()
	{
		$data['fetch_data'] = $this->TargetsModel->get_table();
		$this->load->view('TargetsView',$data); //Adding the view where the data needs to be displayed
	}


}











?>