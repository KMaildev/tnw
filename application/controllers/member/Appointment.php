<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if (empty($this->member_id)) {
            redirect(base_url('member/auth/login'));
        } elseif (empty($this->member_email)) {
            redirect(base_url('member/auth/login'));
        }

        $this->load->model('admin/appointment_model');
    }

    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/appointment/index'),
            'total_rows' => $this->appointment_model->count_all(),
            'per_page' => 500,
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
        $user_info_id = $this->session->userdata('member_id');
        $data["appointments"] = $this->appointment_model->getAll($user_info_id, $config['per_page'], $offset);
        $data["count_all"] = $this->appointment_model->count_all($user_info_id);
        $this->load->view('member/appointment/index', $data);
    }


    public function destroy($id)
    {
        $this->appointment_model->destroy($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
