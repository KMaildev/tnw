<?php
class Notification_model extends CI_Model {

    public function getNotification()
    {
        $this->db->select("*");
        $this->db->from("notification");
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
}
