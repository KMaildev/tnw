<?php
class News_category extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('news_category');
        return $this->db->get()->result();
    }
}