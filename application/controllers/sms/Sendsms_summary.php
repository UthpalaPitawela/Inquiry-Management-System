<?php

require 'Autoload.php';

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
        $apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJhMjhjMmVmMC0yM2NlLTExZTYtOGQ3My0zN2JlMTBmZDRmNjUiLCJzdWIiOiJTSE9VVE9VVF9BUElfVVNFUiIsImlhdCI6MTQ2NDMyODEwNywiZXhwIjoxNzc5ODYwOTA3LCJzY29wZXMiOnsiY29udGFjdHMiOlsicmVhZCIsIndyaXRlIl0sImFjdGl2aXRpZXMiOlsid3JpdGUiLCJyZWFkIl0sIm1lc3NhZ2VzIjpbIndyaXRlIiwicmVhZCJdfSwic29fdXNlcl9pZCI6IjI2OCIsInNvX3VzZXJfcm9sZSI6InVzZXIiLCJzb19wcm9maWxlIjoiYWxsIiwic29fdXNlcl9uYW1lIjoiIiwic29fYXBpa2V5Ijoibm9uZSJ9.oVr6Y5acqK0XBYL21ALYzZc2qSZOm81EaqbcuzaTbMA';

        $config = Swagger\Client\Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization',$apiKey);
        $config->setApiKeyPrefix('Authorization', 'Apikey');
        $config->setSSLVerification(false);

        $apiInstance = new Swagger\Client\Api\DefaultApi();

        $message = new Swagger\Client\Model\Message(array(
         'source' => 'EDULINK',
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
      //  redirect("index.php/EditRecords_controller/index/$regid");

    }
}

?>