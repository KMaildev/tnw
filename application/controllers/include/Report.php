<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('include/report_model');

        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if(empty($this->member_id)){
            redirect(base_url('member/auth/login'));
        }elseif (empty($this->member_email)){
            redirect(base_url('member/auth/login'));
        }
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

    public function member_report($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $config = [
            'base_url' => base_url('include/report/member_report'),
            'total_rows' => $this->report_model->count_all($arr_data),
            'per_page' => 50,
            'reuse_query_string' => TRUE,
            'full_tag_open' => '<ul class="pagination">',
            'full_tag_close' => '</ul>',
            'first_tag_open' => '<li class="page-item page-link">',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li class="page-item page-link">',
            'last_tag_close' => '</li>',
            'next_tag_open' => '<li class="page-item page-link">',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li class="page-item page-link">',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li class="page-item page-link">',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="page-item active"><a class="page-link">',
            'cur_tag_close' => '</a></li>',
        ];

        $this->pagination->initialize($config);
        $data["reports"] = $this->report_model->get_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->report_model->count_all($arr_data);
        $this->load->view('member/member_report/index', $data);
    }


    public function admin_report($offset = 0)
    {
        $config = [
            'base_url' => base_url('include/report/admin_report'),
            'total_rows' => $this->report_model->admin_count_all(),
            'per_page' => 50,
            'reuse_query_string' => TRUE,
            'full_tag_open' => '<ul class="pagination">',
            'full_tag_close' => '</ul>',
            'first_tag_open' => '<li class="page-item page-link">',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li class="page-item page-link">',
            'last_tag_close' => '</li>',
            'next_tag_open' => '<li class="page-item page-link">',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li class="page-item page-link">',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li class="page-item page-link">',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="page-item active"><a class="page-link">',
            'cur_tag_close' => '</a></li>',
        ];

        $this->pagination->initialize($config);
        $data["reports"] = $this->report_model->admin_get_all_data($config['per_page'], $offset);
        $data["count_all"] = $this->report_model->admin_count_all();
        $this->load->view('admin/report/index', $data);
    }

    public function destroy($id)
    {
        $this->report_model->destroy($id);
        $this->session->set_flashdata('success', 'Successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }


}
