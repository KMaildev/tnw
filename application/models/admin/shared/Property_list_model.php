<?php
class Property_list_model extends CI_Model
{

    public function getAll($propertyType, $limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($keyword) {
            $this->db->where(array('townships.townships' => $keyword));
            $this->db->or_like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
            $this->db->or_like(array('title_mm' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->where(array('propertie_type' => $propertyType, 'soldout_status' => 0));
        $this->db->order_by("sale_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all($propertyType)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->where(array('townships.townships' => $keyword));
            $this->db->or_like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
            $this->db->or_like(array('title_mm' => $keyword));
        }

        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->where(array('propertie_type' => $propertyType, 'soldout_status' => 0));
        $this->db->order_by("sale_id ", "DESC");
        return $this->db->get()->num_rows();
    }



    public function getAllPropertyList($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($keyword) {
            $this->db->where(array('townships.townships' => $keyword));
            $this->db->or_like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
            $this->db->or_like(array('title_mm' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("properties.carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*, properties.carete_date AS upload_date");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->order_by("sale_id ", "DESC");
        return $this->db->get()->result();
    }

    public function getAllPropertyListCount()
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($keyword) {
            $this->db->where(array('townships.townships' => $keyword));
            $this->db->or_like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
            $this->db->or_like(array('title_mm' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("properties.carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->order_by("sale_id", "DESC");
        return $this->db->get()->num_rows();
    }
}
