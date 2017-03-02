<?php
 class EditRecordsPending_model extends CI_Model{

     function __construct(){
         parent::__construct();
     }

      function update_user($rid,$fname,$lname,$address,$country,$email,$gender,$contactno,$nic,$ol,$remark,$subject1,$subject2,$subject3,$grade1,$grade2,$grade3,$other,$mode,$intake,$pdate,$counsellorname){
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


         // $query_str = "INSERT INTO register(Fname,Lname,Gender,Address,Country,Email,Contactno,NIC,OL,Remark,Subject1,Subject2,Subject3,Grade1,Grade2,Grade3,Other,Inquiry,Intake,Pdate,id,CounsellorName)VALUES ('$fname','$lname','$gender','$address','$country','$email','$contactno','$nic','$ol','$remark','$subject1','$subject2','$subject3','$grade1','$grade2','$grade3','$other','$mode','$intake','$pdate','$id','$counsellorname')";


         $this->db->query("UPDATE register SET Fname='$fname', Lname='$lname', Gender='$gender', Address='$address', Country='$country', Email='$email',Contactno='$contactno',NIC='$nic',OL='$ol',Remark='$remark',Subject1='$subject1',Subject2='$subject2',Subject3='$subject3',Grade1='$grade1',Grade2='$grade2',Grade3='$grade3',Other='$other',Inquiry='$mode',Intake='$intake',Pdate='$pdate',id='$id' WHERE r_id='$rid' ");


return;


         //$result = $this->db->query("UPDATE register SET total = Grade1 + Grade2 + Grade3");

     }





     //function confirm_registration($registration_code){
        // $query_str = "SELECT  user_id from  users WHERE activation_code = ?";

         //$result = $this->db->query($query_str,$registration_code);

         //if($result->num_rows() == 1){
             //$query_str = "UPDATE  users SET activated = 1 WHERE activation_code = ?";

             //$this->db->query($query_str,$registration_code);
             //return true;

         //}else{
             //return false;
         //}



     //}





     //function check_exists_username($username){
         //$query_str = "SELECT username from users where username = ?";

         //$result = $this->db->query($query_str,$username);

         //if($result->num_rows()> 0){
             //return true;

         //}else{
             //return false;
        // }
     //}
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

    function getDetails($rid)
    {
        //$status = "Pending";
        $sql1 = "SELECT * FROM register WHERE r_id='$rid'";
        $query = $this->db->query($sql1);
        return $query->result();
    }



 }
