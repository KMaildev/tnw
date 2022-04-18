<?php
class Property_guide_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("property_guide");
        $this->db->where(array('status'=> 1));
        $this->db->order_by("pg_id ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $this->db->where(array('status'=> 1));
        return $this->db->get('property_guide')->num_rows();
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('property_guide');
        $this->db->join('admin', 'property_guide.admin_id = admin.id','Left');
        $this->db->where(array('pg_id'=> $id));
        return $this->db->get()->row();
    }


}
