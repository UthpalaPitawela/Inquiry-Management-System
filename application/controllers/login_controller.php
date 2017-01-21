<?php
 class Login_Controller extends CI_Controller{


    function __construct() {

    parent::__construct();
    $this->load->model("Login_Model");


    }
     

    public function index(){
     		
        $this->load->view("Login_View");
     	

    }

 	public function validate_user(){
 		$username = $this->input->post('username');
    	$password = $this->input->post('password');

    	$result = $this->Login_Model->check_login($username, $password);
        $rowcount = $result->num_rows();
       // $numrows=mysqli_num_rows($result);
        if($rowcount>0){



               foreach ($result->result_array() as $row) {

                    $_SESSION["first_username"]=$row['first_name'];
                    $_SESSION["user_ID"]=$row['u_id'];
                    $_SESSION["propic"]=$row['profilepicture'];

                    if ($row['status']==0) {
                        $this->load->view("Manager_Profile");
                        /*$data = array(
                            'is_logged' => true,
                            'username' => $this->input->post('username')
                        );  

                        $this->session->set_userdata($data);*/

                    
                    }elseif ($row['status']==2) {
                        
                        $this->load->view('Admission_Officer');
                    
                    } else {
                        echo "vwrv";
                        /*$this->form_validation->set_message('validate_user', $this->lang->line('error_login'));
                    return false;*/
                    }
                
                }




        }else{
          


            // checking whether the student account

            $resultstudent = $this->Login_Model->check_login_student($username, $password);

            $rowcount2 = $resultstudent->num_rows();
           

        


            if($rowcount2>0){

               foreach ($resultstudent->result_array() as $rowstudent) {

                    $_SESSION["first_username"]=$rowstudent['firstname'];
                    $_SESSION["user_ID"]=$rowstudent['email'];
                    $_SESSION["propic"]=$rowstudent['propic'];


                    $data['programme'] = $this->Login_Model->getCourses($username);

                    $this->load->view('home',$data);



                }


             }else{
                echo "no account";
             }

     
        }




}


 }
?>