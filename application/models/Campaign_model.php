<?php
class Campaign_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_campaign($data)
    {
        $this->db->insert('campaign', $data);
        return TRUE;
    }


}