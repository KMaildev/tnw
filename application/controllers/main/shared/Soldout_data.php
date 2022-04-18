<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soldout_data extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');
        $this->load->library('image_lib');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}

        $this->load->model('admin/shared/soldout_data_model');
    }

    public function index($type=NULL, $offset=0)
    {
        $type = $type;
        $config = [
            'base_url' => base_url('main/shared/soldout_data/index/'.$type),
            'total_rows' => $this->soldout_data_model->count_all($type),
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
        $data["for_sales"] = $this->soldout_data_model->getAll($type, $config['per_page'], $offset);
        $data["count_all"] = $this->soldout_data_model->count_all($type);
        $this->load->view('admin/soldout_data/index', $data);
    }


}
