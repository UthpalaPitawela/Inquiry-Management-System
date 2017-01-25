<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Summary_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('Summary_model');
		
	}

	public function summary($r_id)
	{
		$id = urldecode($r_id);
		$this->load->view('summary_view',$id);
	}

	
	

	 

	public function updateSummary()
	{

		$update = array('Summary1' => $this->input->post('summary1'),'Summary2' => $this->input->post('summary2'), 'Summary3' => $this->input->post('summary3'), 'Summary4' => $this->input->post('summary4'));

		
		
			// $update = array('Summary1' => $this->input->post('summary1'));

		
		
			// $update = array(
			// 	'Summary2' => $this->input->post('summary2')
			// );

		
			// $update = array(
			// 	'Summary3' => $this->input->post('summary3')
			// );

		

			// $update = array(
			// 	'Summary4' => $this->input->post('summary4')
			// );

		
		//print_r($update);

		
		$regid = $this->input->post('regid');
			

		$this->Summary_model->updateSummary($update,$regid);
		redirect("index.php/ManageInquiries_controller#tab-second");
	}
}

?>