<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packages_system extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }

        $this->load->model('admin/packages_system_model');
    }


    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/packages_system/index'),
            'total_rows' => $this->packages_system_model->count_all(),
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
        $data["packages"] = $this->packages_system_model->getAll($config['per_page'], $offset);
        $this->load->view('admin/packages_system/index', $data);
    }

    public function create()
    {
        $this->load->view('admin/packages_system/create');
    }

    public function save()
    {
        $this->form_validation->set_rules('package_name', 'Package Name', 'required');
        $this->form_validation->set_rules('no_of_posts', 'no_of_posts', 'required');
        $this->form_validation->set_rules('post_per_month', 'post_per_month', 'required');
        $this->form_validation->set_rules('refresh_per_month', 'refresh_per_month', 'required');
        $this->form_validation->set_rules('refresh_daily', 'refresh_daily', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: အချက်လက်များအားလုံး ဖြည့်သွင်းပါ။');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->packages_system_model->save();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }



    public function edit($id)
    {
        $data["package"] = $this->packages_system_model->find_by_id($id);
        $this->load->view('admin/packages_system/edit', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('package_id', 'Package ID', 'required');
        $this->form_validation->set_rules('package_name', 'Package Name', 'required');
        $this->form_validation->set_rules('no_of_posts', 'no_of_posts', 'required');
        $this->form_validation->set_rules('post_per_month', 'post_per_month', 'required');
        $this->form_validation->set_rules('refresh_per_month', 'refresh_per_month', 'required');
        $this->form_validation->set_rules('refresh_daily', 'refresh_daily', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->packages_system_model->update();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function destroy($id)
    {
        $this->packages_system_model->destroy($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
