<?php
class City_model extends CI_Model {

    public function getAllRegion()
    {
        $this->db->select("*");
        $this->db->from("region");
        return $this->db->get()->result();
    }


    public function getAllTownships()
    {
        $this->db->select("*");
        $this->db->from("townships");
        return $this->db->get()->result();
    }
    
    
    public function find_by_id($id)
    {
        $this->db->select("*");
        $this->db->from("townships");
        $this->db->where('regions_id', $id);
        return $this->db->get()->result();
    }
}
