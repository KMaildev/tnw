<?php
class Property_type_model extends CI_Model {

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("property_type");
        $this->db->where(array('status'=> 1));
        return $this->db->get()->result();
    }

}
