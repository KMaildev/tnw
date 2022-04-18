<?php
class Testimonials_model extends CI_Model {

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("testimonials");
        $this->db->join('region', 'testimonials.city_id = region.region_id','Left');
        $this->db->where(array('testimonials.status'=> 1));
        return $this->db->get()->result();
    }

}
