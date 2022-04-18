<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propertyrequest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/propertyrequest_model');
    }

    public function index()
    {
        $this->load->view('propertyrequest/index');
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->propertyrequest_model->save();
            $this->session->set_flashdata('success', 'Property Request Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }



}
