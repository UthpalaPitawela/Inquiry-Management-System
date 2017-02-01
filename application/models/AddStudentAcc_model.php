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

	function insertdatabyadmissionofficer($email){
		$this->db->select("Fname,Lname,Contactno");
		$query = $this->db->get_where('register',array('Email'=>$email));

		if ($query->num_rows() > 0) {


			foreach($query->result_array()  as $insertstudent){


				$data = array(
			'user_name'=>$email,		
			'password' => "edulink123",
			'firstname' => $insertstudent['Fname'],
			'lastname' => $insertstudent['Lname'],
			'email' => $email,
			'propic'=>"public/assets/images/users/no-image.jpg",
									//'dob' => $this->input->post('dob'),
			'tpnumber' => $insertstudent['Contactno'],);

				$this->db->insert('student_table',$data);			 

			
				$acc = array('account_created'=>1);
		$this->db->where('Email',$email);
		$this->db->update('register',$acc);


			}
		}
	}

	


}

?>