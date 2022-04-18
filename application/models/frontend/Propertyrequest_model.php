<?php

class Propertyrequest_model extends CI_Model {

    public function save(){
        $arr['name'] = $this->input->post('name');
        $arr['email'] = $this->input->post('email');
        $arr['phone'] = $this->input->post('phone');
        $arr['detail'] = $this->input->post('detail');
        $arr['contact_status'] = $this->input->post('contact_status');
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $query = $this->db->insert('property_request', $arr);
        return $query;
    }

}
