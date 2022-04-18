<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_account extends CI_Controller {

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
        $this->load->model('admin/datacheck_model');
        $this->load->model('member/manage_account_model');
    }

    public function index()
    {
        $this->load->view('member/manage_account/index');
    }

    public function edit_account()
    {
        $member_id = $this->session->userdata('member_id');
        $data["regions"] = $this->region_model->getAll();
        $data["member_data"] = $this->manage_account_model->find_by_id($member_id);
        $this->load->view('member/manage_account/edit_account', $data);
    }

    public function update() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('company_type', 'Company Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        $data = array(
            'email' => $this->input->post('email'),
            'user_id' => $this->input->post('user_id'),
        );

        $email_check_data = array(
            'email' => $this->input->post('email'),
        );

        $email_check_already = $this->datacheck_model->email_check_already($data);
        $check = $this->datacheck_model->email_check($email_check_data);

        $check_email = $email_check_already->email;
        $email = $this->input->post('email');


        $phone_field = $this->input->post('phone');

        if ($phone_field == '') {
            $data['phone'] = NULL;
        }else{
            $total = count($phone_field);
            $phone = [];
            for ($i=0; $i <$total ; $i++) {
                $phone[] = $phone_field[$i];
            }
            $data['phone'] = implode (", ", $phone);
        }

        if ($check_email == $email) {
            $company_type = strtolower($this->input->post('company_type'));
            $data['company_type'] = str_replace(" ", "_", $company_type);
            $data['email'] = $check_email;
            $this->manage_account_model->update($data);
            $this->session->set_flashdata('success', 'Updated Successfully ');
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
                    $company_type = strtolower($this->input->post('company_type'));
                    $data['company_type'] = str_replace(" ", "_", $company_type);
                    $data['email'] = $this->input->post('email');
                    $this->manage_account_model->update($data);
                    $this->session->set_flashdata('success', 'Updated Successfully ');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }


    }

    public function upload_logo()
    {
        $member_id = $this->session->userdata('member_id');
        $data['logo'] = $this->manage_account_model->find_by_id($member_id);
        $this->load->view('member/manage_account/upload_logo', $data);
    }

    public function change_company_logo() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('single_file'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('danger', 'Invalid image format error');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $logo = $data['upload_data']['file_name'];

            $data['logo'] = $logo;
            $data['member_id'] = $this->session->userdata('member_id');
            $this->manage_account_model->change_company_logo($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }




}
