<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buyourservices extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/buyourservices_model');
    }

    public function index()
    {
        $data["packages"] = $this->buyourservices_model->get_packages();
        $this->load->view('frontend/buyourservices/index', $data);
    }


    public function save()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: အချက်လက်များအားလုံး ဖြည့်သွင်းပါ။');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->buyourservices_model->save_get_package_user();
            $this->session->set_flashdata('success', 'Successfully');
            $this->session->set_userdata('show', 'show_package');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
