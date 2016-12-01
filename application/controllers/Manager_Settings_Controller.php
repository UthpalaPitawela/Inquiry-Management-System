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


 }
?>