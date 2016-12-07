<?php
 class user extends CI_Controller{


     function user(){
         parent::__construct();
         $this->view_data['base_url'] = base_url();

         $this->load->model('user_model');


     }

     function  index(){
         $this->register();
     }

     function register(){

         $this->load->library('form_validation');

         //$this->form_validation->set_rules('username','Username','trim|required|alpha_numeric|min_length[6]|xss_clean|strtolower|callback_username_not_exists');
         $this->form_validation->set_rules('fname','First Name','trim|required|alpha_numeric|min_length[3]|xss_clean');
         $this->form_validation->set_rules('lname','Last Name','trim|required|alpha_numeric|min_length[3]|xss_clean');
         $this->form_validation->set_rules('email','Email','trim|required|min_length[3]|xss_clean|valid_email');
         //$this->form_validation->set_rules('password','Password','trim|required|alpha_numeric|min_length[6]|xss_clean');
         //$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|alpha_numeric|min_length[6]|matches[password]|xss_clean');



         if($this->form_validation->run() == FALSE){

             //hasn't been run or there are validation errors
             $this->load->view('view_register',$this->view_data);

         }else{

             //everything is good-process the form- write the data into the registration database
             $fname = $this->input->post('fname');
             $lname = $this->input->post('lname');
             $address = $this->input->post('address');
             $country = $this->input->post('country');
             $email = $this->input->post('email');
             $gender = $this->input->post('gender');
             $contactno = $this->input->post('contactno');
             $nic = $this->input->post('nic');
             $ol = $this->input->post('ol');
             $remark = $this->input->post('remark');
             $subject1 = $this->input->post('subject1');
             $subject2 = $this->input->post('subject2');
             $subject3 = $this->input->post('subject3');
             $grade1 = $this->input->post('grade1');
             $grade2 = $this->input->post('grade2');
             $grade3 = $this->input->post('grade3');
             $other = $this->input->post('other');
             $mode = $this->input->post('mode');
             $intake = $this->input->post('intake');
             $pdate = $this->input->post('pdate');
            // $total=  $this->input->post('grade1' + 'grade2' + 'grade3');

             //$activation_code = $this->_random_string(10);



             $this->user_model->register_user($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,
                 $subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate);



          }


        // $this->load->view('view_register',$this->view_data);
     }





     //function  register_confirm(){
        // $registration_code = $this->uri->segment(3);

         //if($registration_code == ''){
             //echo "Error no registration code in URL";
             //exit();

         //}

         //$registration_confirmed = $this->user_model->confirm_registration($registration_code);

         //if($registration_confirmed){
            // echo "You have successfully registered";

         //}else{
            //echo "You have failed to register- no record found for that activation code";

         //}
     //}







    // function  username_not_exists($username){
         //$this->form_validation->set_message('username_not_exists','That %s already exits.please choose different username');

         //if($this->user_model->check_exists_username($username)){
             //return false;
        // }else{
             //return true;
        // }

     //}

    // function _random_string($length){
         //$len = $length;
         //$base = 'ABCDEFGHIJKLMNOPQRSTWXYZabcdefghijklmnopqrstwxyz123456789';
         //$max = strlen($base)-1;
         //$activatecode='';
         //mt_srand((double)microtime()*1000000);
         //while(strlen($activatecode)<$len +1)
             //$activatecode.=$base{mt_rand(0,$max)};

         //return $activatecode;
     //}



     public function geteligbledata($id){
        $this->load->model('user_model');
         $data = $this->user_model->getdata($id);
         foreach($data as $dd){
             echo $dd->Programme1 .PHP_EOL;
             echo $dd->Programme2 .PHP_EOL;
             echo $dd->Programme3;

        }
         //$this->load->view('view_register',$data);



     }

 }



?>