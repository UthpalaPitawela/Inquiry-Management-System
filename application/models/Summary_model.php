<?php

class Summary_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function updateCallSummary($call,$rid,$date,$call_count){
		
		$call_count++;

		if($call_count%2==1)
		{
			$this->db->query("UPDATE register SET summary_call1='$call',summary_call1_date='$date',call_count='$call_count' WHERE r_id='$rid' ");
			return;
		}elseif ($call_count%2==0) {
			$this->db->query("UPDATE register SET summary_call2='$call',summary_call2_date='$date',call_count='$call_count' WHERE r_id='$rid' ");
			return;
		}
 	} 

 	function updateSmsSummary($sms,$rid,$date,$sms_count){
		
		$sms_count++;

		if($sms_count%2==1)
		{
			$this->db->query("UPDATE register SET summary_sms1='$sms',summary_sms1_date='$date',sms_count='$sms_count' WHERE r_id='$rid' ");
			return;
		}elseif ($call_count%2==0) {
			$this->db->query("UPDATE register SET summary_sms2='$sms',summary_sms2_date='$date',sms_count='$sms_count' WHERE r_id='$rid' ");
			return;
		}
 	} 

 	function updateEmailSummary($email,$rid,$date,$email_count){
		
		$email_count++;

		if($email_count%2==1)
		{
			$this->db->query("UPDATE register SET summary_email1='$email',summary_email1_date='$date',email_count='$email_count' WHERE r_id='$rid' ");
			return;
		}elseif ($call_count%2==0) {
			$this->db->query("UPDATE register SET summary_email2='$email',summary_email2_date='$date',email_count='$email_count' WHERE r_id='$rid' ");
			return;
		}
 	} 

 	function updateOtherSummary($other,$rid,$date){
		
		//$email_count++;

		
			$this->db->query("UPDATE register SET summary_other1='$other',summary_other1_date='$date' WHERE r_id='$rid' ");
			return;
		
 	}
	



}

?>