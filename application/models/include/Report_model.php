<?php
class Report_model extends CI_Model {

    public function save_report(){
        $arr['description'] = $this->input->post('description');
        $arr['post_id'] = $this->input->post('post_id');
        $arr['member_id'] = $this->input->post('member_id');
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $query = $this->db->insert('report', $arr);
    }

    public function get_all_data($arr_data, $limit, $offset)
    {
        $member_id = $arr_data['member_id'];
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("report");
        $this->db->join('properties', 'report.post_id = properties.sale_id ','Left');
        $this->db->where(array('member_id'=> $member_id));
        $this->db->order_by("r_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all($arr_data)
    {
        $member_id = $arr_data['member_id'];
        $this->db->where(array('member_id'=> $member_id));
        return $this->db->get('report')->num_rows();
    }


    public function admin_get_all_data($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('description'=>$keyword));
        }


        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("report");
        $this->db->join('properties', 'report.post_id = properties.sale_id ','Left');
        $this->db->order_by("r_id ", "DESC");
        return $this->db->get()->result();
    }

    public function admin_count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('description'=>$keyword));
        }
        return $this->db->get('report')->num_rows();
    }

    public function destroy($id) {
        $this->db->where('r_id', $id);
        $this->db->delete('report');
        return true;
    }



}
