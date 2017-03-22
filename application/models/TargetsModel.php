<?php

class TargetsModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function set_target($data){
		//Inserting data into the table 'Targets' in the database 'edulink'
		return $this->db->insert('targets',$data);

	}

	function get_table(){
		//Select the fields
		//$this->db->select('TID','EID','E_Name','Role','Target','Start_Date','End_Date','Assigned_By');
		$query = $this->db->get('targets');

		return $query;
	}

	function get_Users()
	{
		$query = $this->db->query("SELECT first_name,last_name,email,u_id FROM user WHERE status=3 or status=4");
		return $query->result();
	}

	function get_Managers()
	{
		$query = $this->db->query("SELECT first_name,last_name,email,u_id FROM user WHERE status=0");
		return $query->result();
	}

	function assigned_targets()
	{
		$query = $this->db->query("SELECT CounsellorName, sum(Status='Pending') AS pending, sum(Status='Following') AS following, sum(Status='Completed') AS completed FROM register GROUP BY CounsellorName");
		// $this->db->select('CounsellorName, (SELECT COUNT(register.Status) FROM register WHERE register.Status="Pending") AS pending',false);
		// $query = $this->db->get('register');

		return $query->result();
	}



}

?>