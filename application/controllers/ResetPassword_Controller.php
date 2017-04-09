<?php
class ResetPassword_Controller extends CI_Controller{
	function changePassword($uid){
				$this->load->library('form_validation');
				$this->load->model('ResetPassword_Model');

                $this->form_validation->set_rules('newPwd', 'Password', 'required');
                $this->form_validation->set_rules('newConfirmPwd', 'Password Confirmation', 'required|matches[newPwd]');
               
               
               
               
                if ($this->form_validation->run() == FALSE)
                {
                        
                    $_SESSION["alert2"] = "unsuccess";
                    redirect("index.php/Email/ForgotPassword_Controller/ViewResetPw/".$uid);
                }
                else
                {
    			$password = $this->input->post('newPwd');

    			
                        
    			$result = $this->ResetPassword_Model->changePassword($password,$uid);

    			if($result==1){
                            $_SESSION["alert2"]="success";
                            redirect("index.php/Login_Controller/index");
                            

                }else{
                            $_SESSION["alert2"]="unsuccess";
                            redirect("index.php/Email/ForgotPassword_Controller/ViewResetPw/".$uid);

                     }

               
                      
                      
           }     
	}
}


?>
