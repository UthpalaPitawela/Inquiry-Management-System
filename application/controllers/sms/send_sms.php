<?php

require 'autoload.php';

class Send_sms extends CI_Controller {

    function send($campaign,$recipient,$message){
       //$campaign = $this->input->post('camp');
       //$recipient = $this->input->post('recp');
       //$message = $this->input->post('message');


        $apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIwZWRkN2U2MC1lNjM5LTExZTYtOGQxZi1kZjMzMzM3ZThjNDMiLCJzdWIiOiJTSE9VVE9VVF9BUElfVVNFUiIsImlhdCI6MTQ4NTcwNDM0MSwiZXhwIjoxODAxMjM3MTQxLCJzY29wZXMiOnsiYWN0aXZpdGllcyI6WyJyZWFkIiwid3JpdGUiXSwibWVzc2FnZXMiOlsicmVhZCIsIndyaXRlIl0sImNvbnRhY3RzIjpbInJlYWQiLCJ3cml0ZSJdfSwic29fdXNlcl9pZCI6IjkzOCIsInNvX3VzZXJfcm9sZSI6InVzZXIiLCJzb19wcm9maWxlIjoiYWxsIiwic29fdXNlcl9uYW1lIjoiIiwic29fYXBpa2V5Ijoibm9uZSJ9.zkBjCz55wDIzZ1CxhbdjGaFNazJpWB4XzomW3MwJ7F0';

        $config = Swagger\Client\Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization',$apiKey);
        $config->setApiKeyPrefix('Authorization', 'Apikey');
        $config->setSSLVerification(false);

        $apiInstance = new Swagger\Client\Api\DefaultApi();

        if($recipient!=""){
            $text = new Swagger\Client\Model\Message(array(
                'source' => 'Edulink',
                'destinations' => ['94719399206'],
                'content' => array(
                    'sms' => 'message from edulink'
                ),
                'transports' => ['SMS']
            ));

            $result = $apiInstance->messagesPost($text,$config);

            print json_encode(array("status"=>"success","info"=>"Your message has been sent successfully"));
            
            
                
        }else{
            

        }


    }
}

?>