<?php

class AddStudentAcc_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function insertdata($data)
	{
		//inserting data into the student_table
		$this->db->insert('student_table',$data);
	}


	


}

?>