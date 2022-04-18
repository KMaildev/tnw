<?php
class Property_count_model extends CI_Model
{

    public function property_count($type)
    {
        $this->db->where(array('propertie_type' => $type));
        return $this->db->get('properties_counter')->num_rows();
    }


    public function checkAdNumber($ad_number)
    {
        $this->db->where('ad_number', $ad_number);
        $result = $this->db->get('properties');

        if ($result->num_rows() > 0) {
            /*
             * the email already exists
            */
            return false;
        } else {
            return true;
        }
    }


    public function adnumber_check_already($checkData)
    {
        $query = $this->db->get_where('properties', $checkData);
        if ($query) {
            return $query->row();
        }
        return false;
    }


    public function want_to_buy_rent_counter($type)
    {
        $this->db->where(array('buy_rent_status' => $type));
        return $this->db->get('want_to_buy_rent_count')->num_rows();
    }


    public function want_to_number_check_already($checkData)
    {
        $query = $this->db->get_where('want_to_buy_rent', $checkData);
        if ($query) {
            return $query->row();
        }
        return false;
    }


    public function want_to_buy_rent_count($type)
    {
        $this->db->where(array('buy_rent_status' => $type));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }
}
