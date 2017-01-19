<?php
 class user_model extends CI_Model{

     function user_model(){
         parent::__construct();
     }

     function register_user($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,
                            $subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,$counsellorname){
         //$shal_password = sha1($password);

         $total = $grade1 + $grade2 + $grade3;
         if(($ol=="Yes") &&($total >= 260)){
             $query_str = "INSERT INTO register(Fname,Lname,Address,Country,Email,Gender,Contactno,NIC,OL,Remark,Subject1,
          Subject2,Subject3,Grade1,Grade2,Grade3,Other,Inquiry,Intake,Pdate,id,CounsellorName)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

             $this->db->query($query_str,array($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,
                 $subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,1,$counsellorname));

            // $a = $this->db->query("SELECT Programme1,Programme2 FROM programme WHERE id = 1");
             //return $a->result();

         }else if(($ol == "Yes") && ((260 > $total) && ($total >= 240))){
             $query_str = "INSERT INTO register(Fname,Lname,Address,Country,Email,Gender,Contactno,NIC,OL,Remark,Subject1,
          Subject2,Subject3,Grade1,Grade2,Grade3,Other,Inquiry,Intake,Pdate,id,CounsellorName)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

             $this->db->query($query_str,array($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,
                 $subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,2,$counsellorname));

         }else if(($ol == "Yes") && (180 >= $total)){
            $query_str = "INSERT INTO register(Fname,Lname,Address,Country,Email,Gender,Contactno,NIC,OL,Remark,Subject1,
          Subject2,Subject3,Grade1,Grade2,Grade3,Other,Inquiry,Intake,Pdate,id,CounsellorName)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $this->db->query($query_str,array($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,
            $subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,3,$counsellorname));

            }

         function select_degree(){
            // $total = $grade1 + $grade2 + $grade3;
         }






     }





     





     
    function  getdata($id){
        $sql = "SELECT * FROM programme WHERE id=$id";
        $query = $this->db->query($sql);
        return $query->result();

    }
 }
