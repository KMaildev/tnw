<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deactivate_account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if(empty($this->member_id)){
            redirect(base_url('member/auth/login'));
        }elseif (empty($this->member_email)){
            redirect(base_url('member/auth/login'));
        }

        $this->load->model('member/deactivate_account_model');
        $this->load->model('member/Login_model');
    }

    public function index()
    {
        $this->load->view('member/deactivate_account/index');
    }

    public function deactivate_now(){
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Something wrong');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array(
                'password' => md5($this->input->post('password')),
                'email' => $this->session->userdata('email'),
            );
            $check = $this->Login_model->auth_check($data);
            if ($check) {
                $member_id = $this->session->userdata('member_id');
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
                $this->session->sess_destroy();
                redirect(base_url('member/auth/login'));
            }else{
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

}
