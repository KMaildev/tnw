<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_note extends CI_Controller {

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

        $this->load->model('member/mynote_model');
    }

	
    public function index($offset=0)
    {
        $data_arr['member_id'] = $this->session->userdata('member_id');

        $config = [
            'base_url' => base_url('main/my_note/index'),
            'total_rows' => $this->mynote_model->count_all($data_arr),
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
        $data["notepads"] = $this->mynote_model->getAll($data_arr, $config['per_page'], $offset);
        $data["count_all"] = $this->mynote_model->count_all($data_arr);
        $this->load->view('member/my_note/index', $data);
    }


    public function save() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('member/my_note/create');
        }else{
            $data_arr['member_id'] = $this->session->userdata('member_id');
            $this->mynote_model->save($data_arr);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function edit($id)
    {
        $data['detail'] = $this->mynote_model->find_by_id($id);
        $this->load->view('member/my_note/edit', $data);
    }

    public function update() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('note_id', 'ID', 'required');

        if ($this->form_validation->run() === FALSE){
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->mynote_model->update();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function destroy($id)
    {
        $this->mynote_model->destroy($id);
        $this->session->set_flashdata('success', 'Successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusActive($id) {
        $this->mynote_model->changeStatusActive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusInactive($id) {
        $this->mynote_model->changeStatusInactive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
    
}
