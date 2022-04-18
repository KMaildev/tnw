<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/appointment_model');
    }


    public function save()
    {
        $this->form_validation->set_rules('appointment_date', 'Date', 'required');
        $this->form_validation->set_rules('appointment_time', 'Time', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('appointment_user_info_id', 'ID', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Please enter your information below');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->appointment_model->save();
            $this->session->set_flashdata('success', 'Appointment Successful');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
