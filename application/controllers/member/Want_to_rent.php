<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Want_to_rent extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if(empty($this->member_id)){
            redirect(base_url('member/auth/login'));
        }elseif (empty($this->member_email)){
            redirect(base_url('member/auth/login'));
        }

        $this->load->model('admin/region_model');
        $this->load->model('admin/townships_model');
        $this->load->model('admin/property_type_model');

        $this->load->model('counter_model');
        $this->load->model('member/want_to_buy_rent_model');
    }

    public function index()
    {
        $data["count_all"] = $this->counter_model->count_want_to_buy();
        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();
        $this->load->view('member/want_to_rent/index', $data);
    }

    public function save() {
        $this->form_validation->set_rules('ad_number', 'ad_number', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('property_type_id', 'Property Type ID', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');
        $this->form_validation->set_rules('township_id', 'Township', 'required');
        $this->form_validation->set_rules('agent_allow_status', 'Agent Allow Status', 'required');
        $this->form_validation->set_rules('property_status', 'Property  Status', 'required');
        $this->form_validation->set_rules('budget_from', 'Budget  From', 'required');
        $this->form_validation->set_rules('budget_to', 'Budget To', 'required');
        $this->form_validation->set_rules('currency', 'Currency', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('area_type', 'Area Type', 'required');

        if ($this->form_validation->run() === FALSE){
            $data["count_all"] = $this->counter_model->count_want_to_buy();
            $data["property_types"] = $this->property_type_model->getAll();
            $data["regions"] = $this->region_model->getAll();
            $data["townships"] = $this->townships_model->getAll();
            $this->load->view('member/want_to_rent/index', $data);
        }else{
            $data['member_id'] = $this->session->userdata('member_id');
            $data['propertie_type'] = 'want_to_rent';
            $this->want_to_buy_rent_model->save($data);
            $this->session->set_flashdata('success', 'Added Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }


}
