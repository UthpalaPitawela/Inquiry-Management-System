<?php
class Assign_Inquiries_Controller extends CI_Controller{
	function index(){
		$this->load->model('Manager_Profile_Model');
        $data['result'] = $this->Manager_Profile_Model->index();
        $this->load->view("manager_profile",$data);
	}
}



?>