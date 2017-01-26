<?php
class Student_Data_Model extends CI_Model{
	function get_User_Data($user_Id){
		

    $this->db->select('*')->from('student_table')->where('email', "$user_Id");
        $query =$this->db->get();  


        return $query;
        //if ($query->num_rows() > 0) {
          //  return true;
        //} else {
          //  return false;
        //}
	}

  function get_Student_Data($user_Id){
    
    // $this->db->select('firstname,email,propic')->from('student_table')->where('email', $username)->where('password',$password);
    

    // $query =$this->db->get();
    //     return $query;
        

    $querystu = $this->db->query("SELECT * FROM student_table");
        return $querystu;
        //if ($query->num_rows() > 0) {
          //  return true;
        //} else {
          //  return false;
        //}
  }

  function get_individual_Student_Data($user_Id){
    
    // $this->db->select('firstname,email,propic')->from('student_table')->where('email', $username)->where('password',$password);
    

    // $query =$this->db->get();
    //     return $query;
        

    $queryindividualstu = $this->db->query("SELECT * FROM student_table WHere email='$user_Id' ");
        return $queryindividualstu;
        //if ($query->num_rows() > 0) {
          //  return true;
        //} else {
          //  return false;
        //}
  }

  function searchStudent($searchkey){


     $searchresult = $this->db->like('firstname', $searchkey,'after')->or_like('lastname',$searchkey,'after')->or_like('email', $searchkey,'after')->get('student_table');

    return $searchresult->result();


  }
}
?>