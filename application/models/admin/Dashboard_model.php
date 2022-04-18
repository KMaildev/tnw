<?php
class Dashboard_model extends CI_Model
{

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


    public function count_total_sale()
    {
        $this->db->where(array('propertie_type' => 'for_sale'));
        return $this->db->get('properties')->num_rows();
    }

    public function count_total_rent()
    {
        $this->db->where(array('propertie_type' => 'for_rent'));
        return $this->db->get('properties')->num_rows();
    }

    public function count_total_new_properties()
    {
        $this->db->where(array('propertie_type' => 'new_properties'));
        return $this->db->get('properties')->num_rows();
    }

    public function total_owner_sale()
    {
        $this->db->where(array('propertie_type' => 'by_owner_for_sale'));
        return $this->db->get('properties')->num_rows();
    }

    public function total_owner_rent()
    {
        $this->db->where(array('propertie_type' => 'by_owner_for_rent'));
        return $this->db->get('properties')->num_rows();
    }

    public function total_want_to_buy()
    {
        $this->db->where(array('propertie_type' => 'want_to_buy'));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }

    public function total_want_to_rent()
    {
        $this->db->where(array('propertie_type' => 'want_to_rent'));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }
}
