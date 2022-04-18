<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification_system extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }
        $this->load->model('admin/notification/notification_system_model');
    }


    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/notification_system/index'),
            'total_rows' => $this->notification_system_model->count_all(),
            'per_page' => 10,
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
        $data["notifications"] = $this->notification_system_model->getAll($config['per_page'], $offset);
        $this->load->view('admin/notification_system/index', $data);
    }

    public function create()
    {
        $this->load->view('admin/notification_system/create');
    }

    public function save()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/notification_system/create');
        } else {
            $this->notification_system_model->save();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function edit($id)
    {
        $data["detail"] = $this->notification_system_model->find_by_id($id);
        $this->load->view('admin/notification_system/edit', $data);
    }

    public function detail($id)
    {
        $data["detail"] = $this->notification_system_model->find_by_id($id);
        $this->load->view('admin/latest_news/detail', $data);
    }



    public function update()
    {
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'Something wrong');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->notification_system_model->update();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function destroy($id)
    {
        $this->notification_system_model->destroy($id);
        $this->session->set_flashdata('success', 'Deleted');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
