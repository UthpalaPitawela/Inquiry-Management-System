<?php
class Student_Data_Model extends CI_Model{
	function get_User_Data($user_Id){
		

    $this->db->select('*')->from('student_table')->where('tpnumber', "$user_Id");
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

function get_Student_For_Counsellor($user_Id){

     $this->db->select('Fname,Lname,Email,Pdate')->from('register')->where('CounsellorName', "$user_Id")->where('Status',"Pending");
        $counquery =$this->db->get(); 
        return $counquery;

}
  function get_individual_Student_Data($user_Id){
    
    // $this->db->select('firstname,email,propic')->from('student_table')->where('email', $username)->where('password',$password);
    

    // $query =$this->db->get();
    //     return $query;
        

    $queryindividualstu = $this->db->query("SELECT * FROM student_table WHere tpnumber='$user_Id' ");
        return $queryindividualstu;
        //if ($query->num_rows() > 0) {
          //  return true;
        //} else {
          //  return false;
        //}
  }

  function searchStudent($searchkey){


     $searchresult = $this->db->like('firstname', $searchkey,'after')->or_like('lastname',$searchkey,'after')->or_like('tpnumber', $searchkey,'after')->get('student_table');

    return $searchresult->result();


  }
}
?>