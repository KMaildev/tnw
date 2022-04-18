<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_list extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
            redirect(base_url('auth'));
        }

        $this->load->model('admin/admin_list_model');
        $this->load->model('admin/datacheck_model');
    }

    public function index($offset=0)
    {
        $config = [
            'base_url' => base_url('main/admin_list/index'),
            'total_rows' => $this->admin_list_model->count_all(),
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
        $data["admin_lists"] = $this->admin_list_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->admin_list_model->count_all();
        $this->load->view('admin/admin_list/index', $data);
    }

    public function create()
    {
        $this->load->view('admin/admin_list/create');
    }

    public function save(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/admin_list/create');
        } else {
            $data = array(
                'email' => $this->input->post('email'),
            );
            $email_check = $this->datacheck_model->email_check_admin($data);
            if($email_check != false){
                $this->session->set_flashdata('danger', 'Email already exists');
                $this->load->view('admin/admin_list/create');
            }else{
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );
                $this->admin_list_model->save($data);
                $this->session->set_flashdata('success', 'Successfully');
                $this->load->view('admin/admin_list/create');
            }
            
        }
    }

    public function edit($id)
    {
        $data["detail"] = $this->admin_list_model->find_by_id($id);
        $this->load->view('admin/admin_list/edit', $data);
    }

    public function update(){
        $this->form_validation->set_rules('admin_id', 'Admin Id', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Something Wrong');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'id' => $this->input->post('admin_id'),
            );

            $email_check_data = array(
                'email' => $this->input->post('email'),
            );

            $email_check_already = $this->datacheck_model->email_check_already_admin($data);
            $check = $this->datacheck_model->email_check_admin($email_check_data);

            $check_email = $email_check_already->email;
            $check_password = $email_check_already->password;


            $email = $this->input->post('email');
            $enter_password = md5($this->input->post('password'));

            if ($check_email == $email) {
                $data['name'] = $this->input->post('name');
                $data['email'] = $check_email;
                $data['id'] = $this->input->post('admin_id');
                $data['password'] = ($enter_password == '') ? $check_password : $enter_password;
                $this->admin_list_model->update($data);
                $this->session->set_flashdata('success', 'Successfully');
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                if($check != false){
                    $this->session->set_flashdata('danger', 'Error: Email already exists');
                    redirect($_SERVER['HTTP_REFERER']);
                }else{
                    if ($this->form_validation->run() === FALSE){
                        $this->session->set_flashdata('danger', 'Error: Fill all fields');
                        redirect($_SERVER['HTTP_REFERER']);
                    }else{
                        $data['name'] = $this->input->post('name');
                        $data['email'] = $this->input->post('email');
                        $data['id'] = $this->input->post('admin_id');
                        $data['password'] = ($enter_password == '') ? $check_password : $enter_password;
                        $this->admin_list_model->update($data);
                        $this->session->set_flashdata('success', 'Successfully');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }
            }
        }
    }


}
