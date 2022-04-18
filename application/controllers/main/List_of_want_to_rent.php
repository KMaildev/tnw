<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_of_want_to_rent extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
            redirect(base_url('auth'));
        }
        $this->load->model('admin/list_of_want_to_rent_model');
    }

    public function index($offset=0)
    {
        $config = [
            'base_url' => base_url('main/list_of_want_to_buy/index'),
            'total_rows' => $this->list_of_want_to_rent_model->count_all(),
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
        $data["list_of_want_to_buys"] = $this->list_of_want_to_rent_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->list_of_want_to_rent_model->count_all();
        $this->load->view('admin/list_of_want_to_buy/index', $data);
    }


    public function detail($id)
    {
        $data["detail"] = $this->list_of_want_to_rent_model->getDataById($id);
        $this->load->view('admin/list_of_want_to_buy/detail', $data);
    }

    public function destroy($id)
    {
        $this->list_of_want_to_buy_model->destroy($id);
        redirect(base_url('main/list_of_want_to_rent'));
    }


    public function changeStatusActive($id) {
        $this->list_of_want_to_rent_model->changeStatusActive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusInactive($id) {
        $this->list_of_want_to_rent_model->changeStatusInactive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

}
