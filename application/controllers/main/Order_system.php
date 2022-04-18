<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_system extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }

        $this->load->model('admin/order_system_model');
    }


    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/order_system/index'),
            'total_rows' => $this->order_system_model->count_all(),
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
        $data["orders"] = $this->order_system_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->order_system_model->count_all();
        $this->load->view('admin/order_system/index', $data);
    }



    public function activate_now($id)
    {
        $this->order_system_model->activate_now($id);
        redirect($_SERVER['HTTP_REFERER']);
    }


    public function pending_now($id)
    {
        $this->order_system_model->pending_now($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
