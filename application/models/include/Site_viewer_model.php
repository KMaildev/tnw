<?php
class Site_viewer_model extends CI_Model {

    public function site_viewer_update(){
        $this->db->set('viewer', 'viewer + 1', FALSE);
        $this->db->where('sv_id', 1);
        $this->db->update('site_viewer');
        return true;
    }

    public function get_site_viewer()
    {
        $this->db->select("*");
        $this->db->from("site_viewer");
        $this->db->where('sv_id', 1);
        return $this->db->get()->row();
    }
}