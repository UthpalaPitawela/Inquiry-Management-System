<?php

class TargetsModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function set_target($data){
		//Inserting data into the table 'Targets' in the database 'edulink'
		$this->db->insert('targets',$data);
	}

	function get_table(){
		//Select the fields
		//$this->db->select('TID','EID','E_Name','Role','Target','Start_Date','End_Date','Assigned_By');
		$query = $this->db->get('targets');

		return $query;
	}

	function get_Users()
	{
		$query = $this->db->query("SELECT first_name,email,u_id FROM user WHERE status=3 or status=4");
		return $query->result();
	}



}

?>