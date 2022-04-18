<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }

        $this->load->model('admin/company_model');
    }

    public function index()
    {
        $data["companys"] = $this->company_model->getAll();
        $this->load->view('admin/company/index', $data);
    }


    public function update_company()
    {
        $data['company_name'] = $this->input->post('company_name');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        $data['status'] = 1;
        $data['admin_id'] = $this->input->post('admin_id');
        $data['company_id'] = 1;
        $image = $this->single_upload();
        $data['logo'] = $image['upload_data']['file_name'];

        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('admin_id', 'Admin', 'required');
        if (empty($_FILES['single_file']['name'])) {
            $this->form_validation->set_rules('single_file', 'Logo', 'required');
        }

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/company/index');
        } else {
            $this->company_model->update($data);
            $this->session->set_flashdata('success', 'Property Type added Successfully');
            redirect('main/company');
        }
        redirect('main/company');
    }


    public function single_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3000;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }
}
