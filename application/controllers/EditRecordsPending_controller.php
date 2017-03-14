<?php
class EditRecordsPending_controller extends CI_Controller{


     function __construct(){
         parent::__construct();
         $this->view_data['base_url'] = base_url();
         $this->load->helper('url');

         $this->load->model('EditRecordsPending_model');


     }

     function  index(){
        

 
        $data["users"] = $this->EditRecordsPending_model->get_users();
        $rid = $this->uri->segment(3);
        $data["record"] = $this->EditRecordsPending_model->getDetails($rid);
        $this->load->view('editRecords_pending',$data);

//         $this->register();
     }
 
     function register(){
        

             //everything is good-process the form- write the data into the registration database
             $rid = $this->input->post('rid');
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
             //$intake = $this->input->post('intake');
             $pdate = $this->input->post('pdate');
             $counsellorname = $this->input->post('counsellorname');
      
             if($remark==""){
                $remark="No remark";
             }
             if($other==""){
                $other="No Description";
             }


             $res = $this->EditRecords_model->update_user($rid,$fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,$subject3,$grade1,$grade2,$grade3,$other,$mode,$pdate,$counsellorname);

              if($res==1){
                $_SESSION["alert1"]="insertsuccess";

            }else{
                $_SESSION["alert1"]="notsuccess";

            }

             //redirect to the view
             redirect("index.php/EditRecordsPending_controller/index/$rid");
             


     }


     public function geteligbledata($id){
      
        $this->load->model('EditRecordsPending_model');
         $data = $this->EditRecordsPending_model->getdata($id);
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