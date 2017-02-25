<?php

require 'autoload.php';

class Sendsmsforsummary_controller extends CI_Controller {

    function send($campaign,$recipient,$message){
       //$campaign = $this->input->post('camp');
       //$recipient = $this->input->post('recp');
       //$message = $this->input->post('message');


             //write the data into the registration database
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
             $intake = $this->input->post('intake');
             $pdate = $this->input->post('pdate');
             $counsellorname = $this->input->post('counsellorname');
      
             if($remark==""){
                $remark="No remark";
             }
             if($other==""){
                $other="No Description";
             }


             $this->EditRecords_model->update_user($rid,$fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,$subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,$counsellorname);
             //$this->Inquirybutton_model->following($rid);

             


        //Code to send the SMS
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

        //redirect to the view
        redirect("index.php/EditRecords_controller/index/$rid");


    }
}

?>