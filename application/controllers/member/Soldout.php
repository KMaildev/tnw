<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soldout extends CI_Controller {
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

        $this->load->model('member/soldout_data_model');
        $this->load->model('admin/property_type_model');
        $this->load->model('admin/region_model');
        $this->load->model('admin/townships_model');

    }

    public function index()
    {
        $this->load->view('member/soldout/index');
    }

    public function soldout_data($type=NULL, $offset=0)
    {
        $type = $type;
        $member_id = $this->session->userdata('member_id');
        $config = [
            'base_url' => base_url('member/soldout/soldout_data/'.$type),
            'total_rows' => $this->soldout_data_model->count_all($type, $member_id),
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
        $data["soldouts"] = $this->soldout_data_model->getAll($type, $member_id, $config['per_page'], $offset);
        $data["count_all"] = $this->soldout_data_model->count_all($type, $member_id);

        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();

        $this->load->view('member/soldout/soldout_data', $data);
    }


}
