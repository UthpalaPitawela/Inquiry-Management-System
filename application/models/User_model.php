<?php
 class User_model extends CI_Model{

     function __construct(){
         parent::__construct();
     }


     function check_student_TP($tp){

                // $query = $this->db->query("SELECT firstname,user_name,propic FROM student_table WHERE user_name= '$username' AND password = '$password'");

        $this->db->select('Fname,CounsellorName')->from('register')->where('Contactno', $tp);
        

        $query =$this->db->get();
        return $query;
        
    }

      function register_user($fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,$subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,$counsellorname){
         //$shal_password = sha1($password);




         $total = $grade1 + $grade2 + $grade3;
         if(($ol=="Yes") &&($total >= 260)){

            $id=1;

         }else if( ($ol == "Yes") && ( (260 > $total) && ($total >= 240) ) ){

            $id=2;

          

          
         }else if(($ol == "Yes") && ( (240 > $total) && ($total>=120) ) ){

                $id=3;



        }else{
            $id=4;
        }


         $query_str = "INSERT INTO register(Fname,Lname,Gender,Address,Country,Email,Contactno,NIC,OL,Remark,Subject1,Subject2,Subject3,Grade1,Grade2,Grade3,Other,Inquiry,Intake,Pdate,id,CounsellorName)VALUES ('$fname','$lname','$gender','$address','$country','$email','$contactno','$nic','$ol','$remark','$subject1','$subject2','$subject3','$grade1','$grade2','$grade3','$other','$mode','$intake','$pdate','$id','$counsellorname')";

        return $this->db->query($query_str);








         //$result = $this->db->query("UPDATE register SET total = Grade1 + Grade2 + Grade3");

     }



    function  getdata($id){
        $sql = "SELECT * FROM programme WHERE id=$id";
        $query = $this->db->query($sql);
        return $query->result();

    }

    function get_Users()
    {
        $query = $this->db->query("SELECT first_name,last_name FROM user WHERE status=3 or status=4");
        return $query->result();
    }



 }
