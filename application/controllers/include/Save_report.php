<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save_report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('include/report_model');
    }


    public function index()
    {
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('post_id', 'Post ID', 'required');
        $this->form_validation->set_rules('member_id', 'Member ID', 'required');
        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->report_model->save_report();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
