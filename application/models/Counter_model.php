<?php
class Counter_model extends CI_Model {

    public function count_want_to_buy()
    {
        $this->db->where('buy_rent_status', 'want_to_buy');
        return $this->db->get('want_to_buy_rent')->num_rows();
    }

    public function by_owner_for_sale()
    {
        $this->db->where('propertie_type', 'by_owner_for_sale');
        return $this->db->get('properties')->num_rows();
    }

    public function by_owner_for_rent()
    {
        $this->db->where('propertie_type', 'by_owner_for_rent');
        return $this->db->get('properties')->num_rows();
    }

    public function for_sale_counter()
    {
        $this->db->where('propertie_type', 'for_sale');
        return $this->db->get('properties')->num_rows();
    }

    public function for_rent_counter()
    {
        $this->db->where('propertie_type', 'for_rent');
        return $this->db->get('properties')->num_rows();
    }

    public function new_properties_counter()
    {
        $this->db->where('propertie_type', 'new_properties');
        return $this->db->get('properties')->num_rows();
    }

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


    public function member_video_counter($member_id)
    {
        $this->db->select('video');
        $this->db->from('properties');
        $this->db->where('video !=', '');
        $this->db->where(array('user_info_id'=> $member_id));
        return $this->db->get()->result();
    }


    public function property_count()
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where('user_info_id !=', '0');
        return $this->db->get()->result();
    }

   

}
