<?php
class Tag_Model extends CI_Model{
	
  function SearchTag($searchkey){


     $searchresult = $this->db->like('tag', $searchkey,'after')->get('tags');

    return $searchresult->result();


  }

  function AddTag($tag_id,$userID){

     $this->db->select('tagid')->from('tagvsuser')->where('user_id', $userID)->where('tagid', $tag_id);
      $querycheck =$this->db->get();
       $rowcountcheck = $querycheck->num_rows();
    
          if($rowcountcheck>0){

            return 1;
          }else{

              $data = array(
      'user_id'=>$userID,    
      'tagid' => $tag_id,);

        return $this->db->insert('tagvsuser',$data); 


          }

    

    
  }
  function AddNewTag($newtag,$userID){

     $data = array(
          
      'tag' => $newtag,);

         $this->db->insert('tags',$data); 

          $this->db->select('tag_id')->from('tags')->where('tag', $newtag);
      $querycheck =$this->db->get();
       $rowcountcheck = $querycheck->num_rows();
    
          if($rowcountcheck>0){

            foreach ($querycheck->result_array() as $row) {
               $tagid=$row['tag_id'];

               $data = array(
      'user_id'=>$userID,    
      'tagid' => $tagid,);

        return $this->db->insert('tagvsuser',$data); 



            }



          }else{

              $data = array(
      'user_id'=>$userID,    
      'tagid' => $tag_id,);

        return $this->db->insert('tagvsuser',$data); 


          }


  }
  function RemoveTag($rid,$tagid){

    $this->db->where('user_id', $rid)->where('tagid',$tagid);

$this->db->delete('tagvsuser');

  }
  function getTags($userID){
    $this->db->select('*')->from('tagvsuser')->where('user_id', $userID);
    

    $query =$this->db->get();


    $rowcount = $query->num_rows();
    $query2=array();       
          if($rowcount>0){


               foreach ($query->result_array() as $row) {




                  $tagid=$row['tagid'];

          $this->db->select('*')->from('tags')->where('tag_id', $tagid);
          $var = $this->db->get();
                   $var=$var->result();

array_push($query2,$var[0]);
//array_push($query2, $var);
         // $query2 =
          
          


                }


             }

return $query2; 

       
        
  }
}
?>