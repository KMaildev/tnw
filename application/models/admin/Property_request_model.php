<?php
class Property_request_model extends CI_Model {

    public function get_member_messages($limit, $offset) {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select('*');
        $this->db->from('property_request');
        $this->db->order_by("pr_id  ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
        }
        return $this->db->get('property_request')->num_rows();
    }

    public function destroy($id) {
        $this->db->where('pr_id', $id);
        $this->db->delete('property_request');
        return true;
    }

}
