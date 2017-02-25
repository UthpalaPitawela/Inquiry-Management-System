<?php
 class Manager_Settings_Controller extends CI_Controller{
function __construct() {
parent::__construct();
//$this->load->view("manager_settings_view");
}
 	public function index(){
        $this->load->model('Manager_Settings_Model');
        $data['result'] = $this->Manager_Settings_Model->getUsers();
        $this->load->view("Manager_Settings_View",$data);
 	
 	}
    //The controller code to change password
 	public function changePassword(){
 		

                $this->load->library('form_validation');

                $this->form_validation->set_rules('newPwd', 'Password', 'required');
                $this->form_validation->set_rules('newConfirmPwd', 'Password Confirmation', 'required|matches[newPwd]');
               
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->model('Manager_Settings_Model');
                        $data['result'] = $this->Manager_Settings_Model->getUsers();
                        $this->load->view('Manager_Settings_View',$data);
                }
                else
                {
                        $this->load->model('Manager_Settings_Model');
                        $data['result'] = $this->Manager_Settings_Model->getUsers();
                        $this->load->view('Manager_Settings_View',$data);
                        $username = $this->input->post('disp_username');
    					$password = $this->input->post('newPwd');
                        
    					

    					$this->Manager_Settings_Model->changePassword($password,$username);
                      
                }
 	}

    //The controller code to add user functions
 	public function addUser(){
 		$this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('addusername', 'Username', 'required|is_unique[user.email]');
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
                    $email = $this->input->post('email');
    				if($role == 'counsellor' | 'Counsellor'){
    					$status = '3';
    				}elseif($role == 'manager' | 'Manager'){
                        $status = '0';
                    }elseif($role == 'assistant manager' | 'Assistant Manager'){
                        $status = '4';
                    }elseif($role == 'admissions officer' | 'Admissions Officer'){
                        $status = '2';
                    }
    				$username = $this->input->post('addusername');
    				$password = $this->input->post('addpassword');


					$this->load->model('Manager_Settings_Model');

    				$this->Manager_Settings_Model->addUser($fname,$lname,$status,$email,$username,$password);
				}



 	}

    public function getUsername(){
        $uid = $this->input->get('uid');
        $this->load->model('Manager_Settings_Model');
        $data = $this->Manager_Settings_Model->getUsername($uid);
        $val = $data['username'];
        echo $val;


    }


 }
?>