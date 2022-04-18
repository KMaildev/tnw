<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_password extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/forgot_password_model');
    }

    public function index()
    {
        $this->load->view('member/auth/forgotpassword/index');
    }


    public function reset_password()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter your %s');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Enter Your Email!');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $email = $this->input->post('email');
            $findemail = $this->forgot_password_model->ForgotPassword($email);
            if ($findemail) {
                $this->forgot_password_model->sendpassword($findemail);
            } else {
                $this->session->set_flashdata('danger', 'Email not found!');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }
}
