<?php
class Soldout_status_model extends CI_Model {

    public function soldout_status_change($id) {
        $arr['soldout_status'] = 1;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }

    public function soldout_status_un_soldout($id) {
        $arr['soldout_status'] = 0;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }

}
