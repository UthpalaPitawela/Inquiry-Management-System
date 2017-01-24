<?php

class summary_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function updateSummary($update){
		

			$this->db->where('r_id', $this->input->post('id'));
			$this->db->update('register', $update);
 } 
	



}

?>