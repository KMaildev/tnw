<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_loan_application extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
            redirect(base_url('auth'));
        }

        $this->load->model('admin/home_loan_application_model');
    }

	
    public function index($offset=0)
    {
        $config = [
            'base_url' => base_url('main/home_loan_application/index'),
            'total_rows' => $this->home_loan_application_model->count_all(),
            'per_page' => 70,
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
        $data["home_loan_applications"] = $this->home_loan_application_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->home_loan_application_model->count_all();
        $this->load->view('admin/home_loan_application/index', $data);
    }


    public function destroy($id)
    {
        $this->home_loan_application_model->destroy($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
    
}
