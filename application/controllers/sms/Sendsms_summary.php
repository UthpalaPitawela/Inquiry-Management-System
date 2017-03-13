<?php

require 'autoload.php';

class Sendsms_summary extends CI_Controller {

    function send(){

  $this->load->model('Summary_model');

$recipient = $this->input->post('recipient');

   $text=$this->input->post('text');

        //Update the database
        $sms = $this->input->post('sms1');
        $regid = $this->input->post('regid');
        $date = $this->input->post('date');
        $sms_count = $this->input->post('sms_count');
            

        $this->Summary_model->updateSmsSummary($sms,$regid,$date,$sms_count);
        
        

        //Send sms
        $apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIwZWRkN2U2MC1lNjM5LTExZTYtOGQxZi1kZjMzMzM3ZThjNDMiLCJzdWIiOiJTSE9VVE9VVF9BUElfVVNFUiIsImlhdCI6MTQ4NTcwNDM0MSwiZXhwIjoxODAxMjM3MTQxLCJzY29wZXMiOnsiYWN0aXZpdGllcyI6WyJyZWFkIiwid3JpdGUiXSwibWVzc2FnZXMiOlsicmVhZCIsIndyaXRlIl0sImNvbnRhY3RzIjpbInJlYWQiLCJ3cml0ZSJdfSwic29fdXNlcl9pZCI6IjkzOCIsInNvX3VzZXJfcm9sZSI6InVzZXIiLCJzb19wcm9maWxlIjoiYWxsIiwic29fdXNlcl9uYW1lIjoiIiwic29fYXBpa2V5Ijoibm9uZSJ9.zkBjCz55wDIzZ1CxhbdjGaFNazJpWB4XzomW3MwJ7F0';

        $config = Swagger\Client\Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization',$apiKey);
        $config->setApiKeyPrefix('Authorization', 'Apikey');
        $config->setSSLVerification(false);

        $apiInstance = new Swagger\Client\Api\DefaultApi();

        $message = new Swagger\Client\Model\Message(array(
         'source' => 'ShoutDEMO',
         'destinations' => [$recipient],
         'content' => array(
          'sms' => $text
         ),
         'transports' => ['SMS']
        ));

        if($recipient!=""){
            $result = $apiInstance->messagesPost($message,$config);
            echo json_encode(array("status"=>"success","info"=>"SMS sent successfully.."));
        }

        //Redirect to the edit records page
        redirect("index.php/EditRecords_controller/index/$regid");

    }
}

?>