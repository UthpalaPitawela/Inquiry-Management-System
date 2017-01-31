<?php
 class Login_Controller extends CI_Controller{
    function __construct() {
    parent::__construct();
    $this->load->model("Login_Model");
$this->load->model("Student_Data_Model");
    $this->load->helper('url_helper');
    }
     
    public function index(){
//        session_destroy();            
        $this->load->view("Login_View");
        
    }
    public function validate_user(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if(isset($_SESSION["username"])){
            $username=$_SESSION["username"];
            $password=$_SESSION["password"];
        }else{
            $_SESSION["username"]=$username;
            $_SESSION["password"]=$password;
        }
        $result = $this->Login_Model->check_login($username, $password);
        $rowcount = $result->num_rows();
       // $numrows=mysqli_num_rows($result);
        if($rowcount>0){
  ?>
          
            <?php
               foreach ($result->result_array() as $row) {
                    $_SESSION["first_username"]=$row['first_name'];
                    $_SESSION["user_ID"]=$row['u_id'];
                    $_SESSION["propic"]=$row['profilepicture'];
                    $_SESSION["status"]=$row['status'];
                    if ($row['status']==0) {
                        $this->load->model('Manager_Profile_Model');
                        $data['result'] = $this->Manager_Profile_Model->index();
                       // print_r($data);
                            if($this->input->post('username') && $this->input->post('password')) {
                                //redirect('index.php/Login_Controller/validate_user');
                             }
                        $this->load->view("manager_profile",$data);
                        /*$data = array(
                            'is_logged' => true,
                            'username' => $this->input->post('username')
                        );  
                        $this->session->set_userdata($data);*/
                    }elseif ($row['status']==2) {
                        $user_Id=$_SESSION["user_ID"];
                        $data['admissionstudent'] = $this->Student_Data_Model->get_Student_Data($user_Id);
   
                        if($this->input->post('username') && $this->input->post('password')) {
                                //redirect('index.php/Login_Controller/validate_user');
                        }
                        $this->load->view('Admission_Officer_Student_list',$data);
//                        $this->load->view('Admission_Officer');
        
                    }elseif ($row['status']==3) {
                         $user_Id=$_SESSION["user_ID"];
                          $data['remiderstudent'] = $this->Student_Data_Model->get_Student_For_Counsellor($user_Id);
                          $this->load->model('Counsellor_Profile_Model');
                        $data1 = $this->Counsellor_Profile_Model->index($username);
                        $fname = $data1[0];
                        $lname = $data1[1];
                        $counsellorname = $fname." ".$lname;
                        ///print_r($counsellorname);
                        $val = $this->Counsellor_Profile_Model->getActivitySummary($counsellorname);
                        $data['result'] = $val[0];
                
                        if($this->input->post('username') && $this->input->post('password')) {
                            //redirect('index.php/Login_Controller/validate_user');
                        }
                        $this->load->view('Counsellor_Profile',$data);
            
            
                    }elseif($row['status'] == 4){
                        if($this->input->post('username') && $this->input->post('password')) {
                            //redirect('index.php/Login_Controller/validate_user');
                        }
                        $this->load->view('Assistant_Manager_Profile');
                    
                    }else{
                        echo("wrong");
                    }
                        /*$this->form_validation->set_message('validate_user', $this->lang->line('error_login'));
                    return false;*/
                
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
                    if($this->input->post('username') && $this->input->post('password')) {
                            //redirect('index.php/Login_Controller/validate_user');
                    }
                    $this->load->view('home',$data);
                }
             }else{
                echo "no account";
                echo $_SESSION["username"];
             }
     
        }
}
    public function logout()
    {
       
        $this->load->driver('cache'); #load cache
        $this->session->sess_destroy(); # Destroy the current session
        $this->cache->clean();  # Clean the cache
        redirect('index.php/'); #  Default controller name 
        ob_clean(); 
    }
 }
?>