<?php
class Deactivate_account_model extends CI_Model {

    public function destroy_want_to_buy_rent($id) {
        $this->db->where('user_info_id', $id);
        $this->db->delete('want_to_buy_rent');
        return true;
    }

    public function destroy_report($id) {
        $this->db->where('member_id', $id);
        $this->db->delete('report');
        return true;
    }

    public function destroy_properties($id) {
        $this->db->where('user_info_id', $id);
        $this->db->delete('properties');
        return true;
    }

    public function destroy_package_order($id) {
        $this->db->where('user_info_id', $id);
        $this->db->delete('package_order');
        return true;
    }

    public function destroy_node_pad($id) {
        $this->db->where('users_info_id', $id);
        $this->db->delete('node_pad');
        return true;
    }

    public function destroy_member_message($id) {
        $this->db->where('user_info_id', $id);
        $this->db->delete('member_message');
        return true;
    }

    public function destroy_folder($id) {
        $this->db->where('users_info_id', $id);
        $this->db->delete('folder');
        return true;
    }

    public function destroy_feedback($id) {
        $this->db->where('company_id', $id);
        $this->db->delete('feedback');
        return true;
    }

    public function destroy_favorites($id) {
        $this->db->where('userinfo_id', $id);
        $this->db->delete('favorites');
        return true;
    }

    public function destroy_user_info($id) {
        $this->db->where('user_id', $id);
        $this->db->delete('user_info');
        return true;
    }

}
