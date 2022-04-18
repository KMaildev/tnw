<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property_list extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');
        $this->load->library('image_lib');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }
        $this->load->model('admin/shared/property_list_model');
    }

    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/all/property_list/index'),
            'total_rows' => $this->property_list_model->getAllPropertyListCount(),
            'per_page' => 100,
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
        $data["property_lists"] = $this->property_list_model->getAllPropertyList($config['per_page'], $offset);
        $data["count_all"] = $this->property_list_model->getAllPropertyListCount();
        $this->load->view('admin/all/property_list/index', $data);
    }
}
