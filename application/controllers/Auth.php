<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
        $this->admin_id = $this->session->userdata('admin_id');
    }


    public function index(){
        $this->load->view('admin/login');
    }

    public function login(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/login');
        } else {
            $data = array(
               'email' => $this->input->post('email'),
               'password' => md5($this->input->post('password')),
               'role' => 'Admin',
             );

            $check = $this->Login_model->auth_check($data);
            if($check != false){
                $user = array(
                 'admin_id' => $check->id,
                 'name' => $check->name,
                 'email' => $check->email,
                 'role' => $check->role,
                );

            $this->session->set_userdata($user);
                redirect(base_url('main/dashboard'));
            }
            $this->load->view('admin/login');
        }

    }


    public function logout(){
        $this->session->sess_destroy();
        $admin_array_unset_session = array('admin_id', 'name', 'email');
        $this->session->unset_userdata($admin_array_unset_session);
        redirect(base_url('auth'));
    }
}
