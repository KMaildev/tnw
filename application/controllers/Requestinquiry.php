<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requestinquiry extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/requestinquiry_model');
    }


    public function index()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->requestinquiry_model->tatnaywon_for_save();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }



    public function save_suggestion()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->requestinquiry_model->save_suggestion();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function data_save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[5]|max_length[1000]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('company_user_id', 'User ID', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->requestinquiry_model->data_save();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function apply_jobs()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'txt|doc|docx|pdf';
        $config['max_size']             = 10000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('danger', 'File error: Something wrong');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $resume_file = $data['upload_data']['file_name'];
        }

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $arr['resume_file'] = $resume_file;
            $this->requestinquiry_model->apply_jobs($arr);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
