<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ad_search extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }
        $this->load->model('admin/shared/ad_search_model');
    }

    public function index()
    {
        $data["for_sales"] = $this->ad_search_model->getAdSearch();
        $data["count_all"] = $this->ad_search_model->count_all_ad();
        $this->load->view('admin/search/index', $data);
    }



    public function filter_search($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/shared/ad_search/filter_search'),
            'total_rows' => $this->ad_search_model->count_all_filter(),
            'per_page' => 30,
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
        $data["for_sales"] = $this->ad_search_model->getFilterSearch($config['per_page'], $offset);
        $data["count_all"] = $this->ad_search_model->count_all_filter();
        $this->load->view('admin/search/index', $data);
    }
}
