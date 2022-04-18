<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
            redirect(base_url('auth'));
        }

        $this->load->model('admin/note_model');
    }

	
    public function index($offset=0)
    {
        $config = [
            'base_url' => base_url('main/my_note/index'),
            'total_rows' => $this->note_model->count_all(),
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
        $data["notepads"] = $this->note_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->note_model->count_all();
        $this->load->view('admin/my_note/index', $data);
    }

    public function create()
    {
        $this->load->view('admin/my_note/create');
    }

    public function save() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/my_note/create');
        }else{
            $this->note_model->save();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function edit($id)
    {
        $data['detail'] = $this->note_model->find_by_id($id);
        $this->load->view('admin/my_note/edit', $data);
    }

    public function update() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('note_id', 'ID', 'required');

        if ($this->form_validation->run() === FALSE){
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->note_model->update();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function destroy($id)
    {
        $this->note_model->destroy($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusActive($id) {
        $this->note_model->changeStatusActive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusInactive($id) {
        $this->note_model->changeStatusInactive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
    
}
