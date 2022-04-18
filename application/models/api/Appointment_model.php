<?php
class Appointment_model extends CI_Model {

    public function getAll($userId) {
        $this->db->select('*');
        $this->db->from('appointment');
        $this->db->where(array('appointment_user_info_id'=> $userId));
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

}
