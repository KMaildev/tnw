<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

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

        $this->load->model('member/feedback_model');
    }

    public function index()
    {
        $this->load->view('member/feedback/index');
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $data['member_id'] = $this->session->userdata('member_id');
            $this->feedback_model->save($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


}
