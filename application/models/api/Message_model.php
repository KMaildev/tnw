<?php
class Message_model extends CI_Model {

    public function getAll($userId) {
        $this->db->select('*');
        $this->db->from('member_message');
        $this->db->where(array('user_info_id'=> $userId));
        $this->db->order_by("mm_id ", "DESC");
        return $this->db->get()->result();
    }


    public function messageDetail($MessageId) {
        $this->db->select('*');
        $this->db->from('member_message');
        $this->db->where(array('mm_id'=> $MessageId));
        return $this->db->get()->row();
    }

}
