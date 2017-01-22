<?php
class Assign_Inquiries_Controller extends CI_Controller{
	function index(){
		$this->load->model('Assign_Inquiries_Model');
		$data['result'] = $this->Assign_Inquiries_Model->index();
		//print_r($data);

		$this->load->view('Assign_Inquiries',$data);
	}
}



?>