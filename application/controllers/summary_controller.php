<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class summary_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('summary_model');
		
	}

	public function summary($r_id)
	{
		$id = urldecode($r_id);
		$this->load->view('summary_view',$id);
	}

	
	

	

	public function updateSummary()
	{
		$update = array(
			'Summary1' => $this->input->post('summary1'),
			'Summary2' => $this->input->post('summary2'),
			'Summary3' => $this->input->post('summary3'),
			$id
		);

		

		//$this->summary_model->updateSummary($update);
		print_r($update);
	}
}

?>