<?php
 class Manager_Settings_Controller extends CI_Controller{
function __construct() {
parent::__construct();
//$this->load->view("manager_settings_view");
}
 	public function index(){
 		
 		$this->load->view("Manager_Settings_View");
 	
 	}
 	public function changePassword(){
 		

                $this->load->library('form_validation');

                //$this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('newPwd', 'Password', 'required');
                $this->form_validation->set_rules('newConfirmPwd', 'Password Confirmation', 'required|matches[newPwd]');
               // $this->form_validation->set_rules('email', 'Email', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('Manager_Settings_View');
                }
                else
                {
                        $this->load->view('Manager_Settings_View');
                       // $username = manager;
    					$password = $this->input->post('newPwd');

    					$this->load->model('Manager_Settings_Model');

    					$this->Manager_Settings_Model->changePassword($password);
                       //echo '<script>alert("You Have Successfully Changed Your Password");</script>';
                        //echo'<script language ="javascript">';
                    		/*echo "swal({  title: 'Item successfully added to the stock!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='<?php $this->load->view('manager_setttings_view')?>'});";
                		echo'</script>';
            			*/
                }
 	}

 	public function addUser(){
 		$this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('addusername', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('addpassword', 'Password', 'required');
        $this->form_validation->set_rules('addconfirmpassword', 'Password Confirmation', 'required|matches[addpassword]');
        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('Manager_Settings_View');
                	//echo "Hii";
                }
                else
                {
                    $this->load->view('Manager_Settings_View');
                       
    				$fname = $this->input->post('fname');
    				$lname = $this->input->post('lname');
    				$role = $this->input->post('role');
    				if($role == 'counsellor' | 'Counsellor'){
    					$status = '3';
    				}
    				$username = $this->input->post('addusername');
    				$password = $this->input->post('addpassword');


					$this->load->model('Manager_Settings_Model');

    				$this->Manager_Settings_Model->addUser($fname,$lname,$status,$username,$password);
				}



 	}


 }
?>