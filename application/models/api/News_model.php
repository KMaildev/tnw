<?php
class News_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("latest_news");
        $this->db->where(array('status'=> 1));
        $this->db->order_by("news_id", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $this->db->where(array('status'=> 1));
        return $this->db->get('latest_news')->num_rows();
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('latest_news');
        $this->db->where(array('news_id'=> $id));
        return $this->db->get()->row();
    }


}
