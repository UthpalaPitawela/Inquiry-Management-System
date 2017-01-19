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
             $counsellorname = $this->input->post('counsellorname');




             $status = $this->user_model->register_user($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,
                 $subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,$counsellorname);
            redirect('user/register',$this->view_data);



          }



     }


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



     }

 }



?>
