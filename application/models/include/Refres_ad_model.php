<?php
class Refres_ad_model extends CI_Model
{
    public function update_refreshad($id)
    {
        $latest_record = $this->get_latest_record();
        $latest_id = $latest_record->refresh_ad;
        $arr['refresh_ad'] = $latest_id + 1;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }


    public function get_latest_record()
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->order_by('refresh_ad', 'DESC');
        return $this->db->get()->row();
    }


    public function save_refresh_ad_counter($id, $userId)
    {
        $arr['userinfo_id'] = $userId;
        $arr['no_of_refresh'] = 1;
        $arr['refresh_property_id'] = $id;
        $arr['refresh_date'] = date("Y-m-d");
        return $this->db->insert('refresh_ad_counter', $arr);
    }


    public function get_today_refresh_ad_counter($id)
    {
        $this->db->select_sum('no_of_refresh');
        $this->db->from('refresh_ad_counter');
        $date = date("Y-m-d");
        $this->db->where(array('userinfo_id' => $id, 'refresh_date' => $date));
        return $this->db->get()->row();
    }
}
