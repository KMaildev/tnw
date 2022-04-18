<?php
class Manage_account_model extends CI_Model {


    public function find_by_id($member_id) {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where(array('user_id'=> $member_id));
        return $this->db->get()->row();
    }

    public function update($data){
        $arr['name'] = $this->input->post('name');
        $arr['email'] = $data['email'];
        $arr['phone'] = $data['phone'];
        $arr['address'] = $this->input->post('address');
        $arr['company_type'] = $this->input->post('company_type');
        $arr['description'] = $this->input->post('description');
        $arr['company_name'] = $this->input->post('company_name');
        $arr['user_role'] = $data['company_type'];
        $arr['region_id'] = $this->input->post('region_id');
        $id = $this->input->post('user_id');
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
    }

    public function change_company_logo($data){
        $arr['logo'] = $data['logo'];
        $id = $data['member_id'];
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
    }



}
