<?php
class Manager_Profile_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->model('Manager_Profile_Model');
        $data['result'] = $this->Manager_Profile_Model->index();
        $this->load->view("manager_profile",$data);
	}
}



?>