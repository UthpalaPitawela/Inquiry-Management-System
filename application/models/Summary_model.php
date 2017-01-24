<?php

class Summary_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function updateSummary($update,$rid){
		

			$this->db->where('r_id', $rid);
			$this->db->update('register', $update);
 } 
	



}

?>