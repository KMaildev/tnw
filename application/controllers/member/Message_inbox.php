<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_inbox extends CI_Controller {

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

        $this->load->model('member/message_inbox_model');
    }

    public function index()
    {
        $member_id = $this->session->userdata('member_id');
        $data["member_messages"] = $this->message_inbox_model->get_member_messages($member_id);
        $this->load->view('member/message_inbox/index', $data);
    }


}
