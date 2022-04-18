<?php
class Books_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("property_book");
        $this->db->where(array('status'=> 0));
        $this->db->order_by("pb_id", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $this->db->where(array('status'=> 0));
        return $this->db->get('property_book')->num_rows();
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('property_book');
        $this->db->where(array('pb_id'=> $id));
        return $this->db->get()->row();
    }


}
