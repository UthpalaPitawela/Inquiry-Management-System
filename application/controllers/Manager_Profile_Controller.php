<?php
class Manager_Profile_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->model('Manager_Profile_Model');
        //$data['result'] = $this->Manager_Profile_Model->index();
        $data['result'] = $this->Manager_Profile_Model->index();
        //print_r($data['pending']);
        $this->load->view("manager_profile",$data);
	}
}



?>