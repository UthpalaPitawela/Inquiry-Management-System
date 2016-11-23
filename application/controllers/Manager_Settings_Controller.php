<?php
 class Manager_Settings_Controller extends CI_Controller{
function __construct() {
parent::__construct();
//$this->load->view("manager_settings_view");
}
 	public function index(){
 		
 		$this->load->view("manager_setttings_view");
 	
 	}
 	public function changePassword(){
 		$this->load->view("manager_change_password_view");
 	}
 }
?>