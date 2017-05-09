<?php

require 'vendor/Autoload.php';

use Swagger\Client\ShoutoutClient;

class Sendsms_summary extends CI_Controller {

    function send(){

  $this->load->model('Summary_model');

        $recipient = $this->input->post('contactno');
 
        $text=$this->input->post('sms1');

        $page = $this->input->post('page');
        //Update the database
        $sms = $this->input->post('sms1');
        $regid = $this->input->post('regid');
        $date = $this->input->post('date');
        $sms_count = $this->input->post('sms_count');
            

        $this->Summary_model->updateSmsSummary($sms,$regid,$date,$sms_count);
        $this->load->model('Inquirybutton_model');
        
        $this->Inquirybutton_model->following($regid);

        

        //Send sms
        $apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJmNTE0ZTRkMC1iYjZmLTExZTYtYjZmYi1hMzA5NDA3MzQ5Y2MiLCJzdWIiOiJTSE9VVE9VVF9BUElfVVNFUiIsImlhdCI6MTQ4MTAwMDAyMCwiZXhwIjoxNzk2NTMyODIwLCJzY29wZXMiOnsiYWN0aXZpdGllcyI6WyJyZWFkIiwid3JpdGUiXSwibWVzc2FnZXMiOlsicmVhZCIsIndyaXRlIl0sImNvbnRhY3RzIjpbInJlYWQiLCJ3cml0ZSJdfSwic29fdXNlcl9pZCI6IjI2OCIsInNvX3VzZXJfcm9sZSI6InVzZXIiLCJzb19wcm9maWxlIjoiYWxsIiwic29fdXNlcl9uYW1lIjoiIiwic29fYXBpa2V5Ijoibm9uZSJ9.G67WrmtcQyzDVef3FBin3ug5ONmXOmAlmtwMJ7xZ1DM';

         $client = new ShoutoutClient($apiKey,false,false);


        $message = array(
         'source' => 'EDULINK',
         'destinations' => [$recipient],
         'content' => array(
          'sms' => $text
         ),
         'transports' => ['SMS']
        );

        try {
              $result = $client->sendMessage($message);
              $_SESSION["alertsms"]="smsSent";
              if($page == "1"){
                redirect("index.php/EditRecords_controller/index/$regid");
              }elseif ($page == "2") {
                redirect("index.php/ManageInquiries_controller/index/$regid");
              }elseif ($page == "3") {
                redirect("index.php/EditRecords_controller/index/$regid");
              }else{
                redirect("index.php/ManageInquiriesCoun_controller/index/$regid");
              }
              
              //print_r($result);
          } catch (Exception $e) {

              echo 'Exception when sending message: ', $e->getMessage(), PHP_EOL;
              $_SESSION["alertsms"]="smsFail";
              if($page == "1"){
                redirect("index.php/EditRecords_controller/index/$regid");
              }elseif ($page == "2") {
                redirect("index.php/ManageInquiries_controller/index/$regid");
              }elseif ($page == "3") {
                redirect("index.php/EditRecords_controller/index/$regid");
              }else{
                redirect("index.php/ManageInquiriesCoun_controller/index/$regid");
              }
          }

        /*

        if($recipient!=""){
            $result = $apiInstance->messagesPost($message,$config);
            echo json_encode(array("status"=>"success","info"=>"SMS sent successfully.."));
        } */

        //Redirect to the edit records page


    }
}

?>