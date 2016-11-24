<?php
 class Interface_Check extends CI_Controller{
function __construct() {
parent::__construct();
//$this->load->view("manager_settings_inview");
}
 	public function index(){
 		
 		$this->load->view("interfacecheck");
 	
 	}
 	
 }
?>