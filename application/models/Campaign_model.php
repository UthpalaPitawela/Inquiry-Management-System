<?php
class Campaign_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_campaigns(){
       $this->db->order_by('campaign_id','DESC');
       $query = $this->db->get('campaign');
       return $query->result();
    }

    public function get_campaignStudents($camp_id){
        $this->db->select("Fname,Lname,r_id,Contactno,Email");
        $this->db->where('campaign_id',$camp_id);
        $query = $this->db->get('register');
        return $query->result();
    }

    public function insert_newCampaign($campaign){
        $this->db->insert('campaign',$campaign);
    }

    public function get_id($camp_name){
        $this->db->select('campaign_id');
        $this->db->where('campaign_name',$camp_name);
        $query = $this->db->get('campaign');
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            return $data[0]['campaign_id'];
        } else {
            return false;
        } 
        
    }
    
    public function update_id($camp_id,$campaign){
        $arr = array('campaign_id'=> $camp_id);
        if($campaign['inquiry']!=""){
            $this->db->where('Inquiry',$campaign['inquiry']);
        }
        if($campaign['status']!=""){
            $this->db->where('Status',$campaign['status']);
        }

        $this->db->update('register',$arr);
        return $this->db->affected_rows() > 0 ;

    }

    public function delete_campaign($camp_id){
        $this->db->where('campaign_id', $camp_id);
        $this->db->delete('campaign'); 
    }

    public function get_camp($camp_id){
        $this->db->where('campaign_id',$camp_id);
        $query = $this->db->get('campaign');
        return $query->result();
    }

    public function select_students($camp_name){
        $this->db->select('book_id, book_name, author_name, category_name');
        $this->db->from('books');
        $this->db->join('category', 'category.category_id = books.category_id');
        $this->db->where('category_name', 'Self Development');
        $query = $this->db->get();
    }

    public function get_newCampaign($camp_id){
        $query = $this->db->get_where('campaign',array('campaign_id'=>$camp_id));
        return $query->result();
    }


    public function select_campaign(){
        $this->db->select('campaign_id','campaign_name');
        $this->db->order_by('campaign_id','DESC');
        $query = $this->db->get('campaign');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }

    }

    public function select_bulkSMS($camp_id){

        $this->db->select("Contactno,Fname,r_id");
        $this->db->where('campaign_id',$camp_id);
        $query = $this->db->get('register');
        
        return $query->result();
        
    }

    public function select_bulkEmail($camp_id){

        $this->db->select("Email,Fname,r_id");
        $this->db->where('campaign_id',$camp_id);
        $query = $this->db->get('register');
        
        return $query->result();
        
    }

   


}