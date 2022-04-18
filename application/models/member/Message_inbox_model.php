<?php
class Message_inbox_model extends CI_Model {

    public function get_member_messages($member_id) {
        $this->db->select('*');
        $this->db->from('member_message');
        $this->db->where(array('user_info_id'=> $member_id));
        $this->db->order_by("mm_id ", "DESC");
        return $this->db->get()->result();
    }

}
