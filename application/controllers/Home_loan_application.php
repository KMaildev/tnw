<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_loan_application extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
        $this->load->model('frontend/home_loan_application_model');
    }


    public function index()
    {
        $data["data_regions"] = $this->properties_list_model->get_regions();
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $this->load->view('home_loan_application/index', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('property_type', 'property_type', 'required');
        $this->form_validation->set_rules('region', 'region', 'required');
        $this->form_validation->set_rules('township_id', 'township_id', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'required');
        $this->form_validation->set_rules('application_type', 'application_type', 'required');
        $this->form_validation->set_rules('employment_status', 'employment_status', 'required');
        $this->form_validation->set_rules('incomes', 'incomes', 'required');
        $this->form_validation->set_rules('current_location', 'current_location', 'required');
        $this->form_validation->set_rules('bank', 'bank', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->home_loan_application_model->save();
            $this->session->set_flashdata('success', 'Home Loan Application Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }



}
