<?php
class Package_viewer_model extends CI_Model {

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("get_package_user");
        return $this->db->get()->result();
    }

}