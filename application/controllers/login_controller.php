<?php
 class Login_Controller extends CI_Controller{


function __construct() {

parent::__construct();
$this->load->model("login_model");


}
 	public function index(){
 		
 		$this->load->view("login_view");
 	

 	}

 	public function validate_user(){
 		$username = $this->input->post('username');
    	$password = $this->input->post('password');

    	$result = $this->login_model->check_login($username, $password);

    	if ($result) {
    		$this->load->view("manager_profile");
        	/*$data = array(
            	'is_logged' => true,
            	'username' => $this->input->post('username')
        	);  

        	$this->session->set_userdata($data);*/

    	} else {
    		echo "Check login details";
        	/*$this->form_validation->set_message('validate_user', $this->lang->line('error_login'));
        return false;*/
    }
 	}
 }
?>