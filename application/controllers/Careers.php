<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/careers_model');
        $this->load->model('frontend/properties_list_model');
    }

	public function index($offset = 0)
	{
		$config = [
            'base_url' => base_url('careers/index'),
            'total_rows' => $this->careers_model->count_all(),
            'per_page' => 40,
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
        $data["careers"] = $this->careers_model->getAll($config['per_page'], $offset);
		$this->load->view('careers/index', $data);
	}

	public function detail($id)
	{
		$data["detail"] = $this->careers_model->find_by_id($id);
		$data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
		$this->load->view('careers/detail', $data);
	}
}
