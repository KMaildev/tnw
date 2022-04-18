<?php
class Ad_search_model extends CI_Model
{

    public function getAdSearch()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
            $this->db->or_like(array('title_mm' => $keyword));
        }
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->order_by("sale_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all_ad()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
            $this->db->or_like(array('title_mm' => $keyword));
        }
        return $this->db->get('properties')->num_rows();
    }




    public function getFilterSearch($limit, $offset)
    {
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->order_by("sale_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all_filter()
    {
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }
        return $this->db->get('properties')->num_rows();
    }
}
