<?php
class Soldout_data_model extends CI_Model {

    public function getAll($type, $limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($keyword) {
            $this->db->like(array('ad_number'=>$keyword));
            $this->db->or_like(array('title_eng'=>$keyword));
            $this->db->or_like(array('title_mm'=>$keyword));
        }

        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->where(array('propertie_type'=> $type, 'soldout_status'=> 1));
        $this->db->order_by("sale_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all($type)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('ad_number'=>$keyword));
            $this->db->or_like(array('title_eng'=>$keyword));
        }
        $this->db->where(array('propertie_type'=> $type, 'soldout_status'=> 1));
        return $this->db->get('properties')->num_rows();
    }

}
