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

	function insertdatabyadmissionofficer($Contactno){
		$this->db->select("Fname,Lname,Email,pref1,pref2");
		$query = $this->db->get_where('register',array('Contactno'=>$Contactno));

		if ($query->num_rows() > 0) {


			foreach($query->result_array()  as $insertstudent){


				$data = array(
			'user_name'=>$Contactno,		
			'password' => "edulink123",
			'firstname' => $insertstudent['Fname'],
			'lastname' => $insertstudent['Lname'],
			'email' => $insertstudent['Email'],
			'propic'=>"public/assets/images/users/no-image.jpg",
			'pref1'=>$insertstudent['pref1'],
			'pref2'=>$insertstudent['pref2'],
									//'dob' => $this->input->post('dob'),
			'tpnumber' => $Contactno,);

				$this->db->insert('student_table',$data);			 

			
				$acc = array('account_created'=>1);
		$this->db->where('Contactno',$Contactno);
		$this->db->update('register',$acc);


			}
		}
	}

	


}

?>