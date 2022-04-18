<?php
class Refreshad_model extends CI_Model
{

    public function get_today_refresh_ad_counter($id)
    {
        $this->db->select_sum('no_of_refresh');
        $this->db->from('refresh_ad_counter');
        $date = date("Y-m-d");
        $this->db->where(array('userinfo_id' => $id, 'refresh_date' => $date));
        return $this->db->get()->row();
    }
}
