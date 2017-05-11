<?php
class User extends CI_Controller{


     function __construct(){
         parent::__construct();
         $this->view_data['base_url'] = base_url();

         $this->load->model('User_model');


     }

     function  index(){
        
        $data["users"] = $this->User_model->get_users();
        $this->load->view('view_register',$data);

//         $this->register();
     }

function TPcheck(){

    $tp= $this->input->post('tp');
     $result = $this->User_model->check_student_TP($tp);
        $rowcount = $result->num_rows();
$existresult=$result->result();
      
       // $numrows=mysqli_num_rows($result);
        if($rowcount>0){

foreach ($existresult as $key) {

    echo "Phone number $tp exists! Handled by $key->CounsellorName";
}
        //        echo "True";
           
           }else{
            echo "False";
           }
}

     function register(){

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
            // $remark = $this->input->post('remark');
             $Preference1 = $this->input->post('Preference1');             
             $Preference2 = $this->input->post('Preference2');
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
             $counsellorname = $this->input->post('counsellorname');
      
             if($Preference1==""){
                $Preference1="No Preference";
             }
             if($Preference2==""){
                $Preference2="No Preference";
             }
             if($other==""){
                $other="No Description";
             }
 

            $res= $this->User_model->register_user($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$subject1,$subject2,$subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,$counsellorname,$Preference1,$Preference2);


              if($res==1){
   $_SESSION["alert"]="insertsuccess";


 }else{
 $_SESSION["alert"]="notsuccess";


 }

          //}

             
             $this->index();


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
             echo $dd->Programme3 .PHP_EOL;
             echo $dd->Programme4 .PHP_EOL;
             echo $dd->Programme5 .PHP_EOL;
             echo $dd->Programme6 .PHP_EOL;
             echo $dd->Programme7;

        }
         //$this->load->view('view_register',$data);



     }



}



?>