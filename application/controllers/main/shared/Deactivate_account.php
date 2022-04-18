<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deactivate_account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');
        if(empty($this->admin_id)){
            redirect(base_url('auth'));
        }
        $this->load->model('member/deactivate_account_model');
    }

    public function deactivate_now($id){
        $member_id = $id;
        $this->deactivate_account_model->destroy_want_to_buy_rent($member_id);
        $this->deactivate_account_model->destroy_report($member_id);
        $this->deactivate_account_model->destroy_properties($member_id);
        $this->deactivate_account_model->destroy_package_order($member_id);
        $this->deactivate_account_model->destroy_node_pad($member_id);
        $this->deactivate_account_model->destroy_member_message($member_id);
        $this->deactivate_account_model->destroy_folder($member_id);
        $this->deactivate_account_model->destroy_feedback($member_id);
        $this->deactivate_account_model->destroy_favorites($member_id);
        $this->deactivate_account_model->destroy_user_info($member_id);
        redirect(base_url('main/developers/index'));
    }

}
