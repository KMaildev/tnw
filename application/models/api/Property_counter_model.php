<?php
class Property_counter_model extends CI_Model {



    public function count_total_soldout($member_id)
    {
        $this->db->where(array('soldout_status'=> '1', 'user_info_id'=> $member_id));
        return $this->db->get('properties')->num_rows();
    }


    public function count_total_sale($member_id)
    {
        $this->db->where(array('propertie_type'=> 'for_sale', 'user_info_id'=> $member_id));
        return $this->db->get('properties')->num_rows();
    }

    public function count_total_rent($member_id)
    {
        $this->db->where(array('propertie_type'=> 'for_rent', 'user_info_id'=> $member_id));
        return $this->db->get('properties')->num_rows();
    }

    public function count_total_new_properties($member_id)
    {
        $this->db->where(array('propertie_type'=> 'new_properties', 'user_info_id'=> $member_id));
        return $this->db->get('properties')->num_rows();
    }


    public function total_owner_sale($member_id)
    {
        $this->db->where(array('propertie_type'=> 'by_owner_for_sale', 'user_info_id'=> $member_id));
        return $this->db->get('properties')->num_rows();
    }

    public function total_owner_rent($member_id)
    {
        $this->db->where(array('propertie_type'=> 'by_owner_for_rent', 'user_info_id'=> $member_id));
        return $this->db->get('properties')->num_rows();
    }

    public function total_want_to_buy($member_id)
    {
        $this->db->where(array('propertie_type'=> 'want_to_buy', 'user_info_id'=> $member_id));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }

    public function total_want_to_rent($member_id)
    {
        $this->db->where(array('propertie_type'=> 'want_to_rent', 'user_info_id'=> $member_id));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }

}
