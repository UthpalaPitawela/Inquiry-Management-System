<?php

require 'vendor/Autoload.php';

use Swagger\Client\ShoutoutClient;


class Send_sms extends CI_Controller {

    function send($recipient,$text){
        /*
       $campaign = 'camp1';
       $campaign_id = '1';
       $recipient = '';
       $subject = "regarding lecs";
       $message = "lectures have been postponed"; */


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
        /*
        if($recipient!=""){
            $result = $apiInstance->messagesPost($message,$config);
            //print json_encode(array("status"=>"success"));
        }//else{
          //  print json_encode(array("status"=>"fail"));
      //  } */

          try {
              $result = $client->sendMessage($message);
              //print_r($result);
          } catch (Exception $e) {
              echo 'Exception when sending message: ', $e->getMessage(), PHP_EOL;
          }

    }
}

?>