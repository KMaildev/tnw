<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_properties extends CI_Controller {

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

        $this->load->model('member/dashboard_model');
        $this->load->model('admin/for_sale_model');
        $this->load->model('admin/property_type_model');
        $this->load->model('admin/region_model');
        $this->load->model('admin/townships_model');
        $this->load->model('counter_model');
        $this->load->model('member/packages_model');
        $this->load->model('member/member_properties_for_sale_model');
    }

    public function index()
    {
        $user_permissions = $this->session->userdata('user_permissions');
        if ($user_permissions == 'agent') {
            $get_packages_plan = 'free_for_agent';
        }elseif ($user_permissions == 'by_owner') {
            $get_packages_plan = 'free_for_owner';
        }
        $member_id = $this->session->userdata('member_id');
        $data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);
        $data["packages"] = $this->dashboard_model->get_package($get_packages_plan);
        $data["already_posts"] = $this->dashboard_model->get_already_posts($member_id);

        $data["count_all"] = $this->counter_model->new_properties_counter();
        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();

        $data["video_counters"] = $this->counter_model->member_video_counter($member_id);
        $this->load->view('member/new_properties/index', $data);
    }

    public function save() {
        $data['title_eng'] = $this->input->post('title_eng');
        $data['title_mm'] = $this->input->post('title_mm');
        $data['region_id'] = $this->input->post('region_id');
        $data['township_id'] = $this->input->post('township_id');
        $data['property_type'] = $this->input->post('property_type');
        $data['floor'] = $this->input->post('floor');
        $data['area'] = $this->input->post('area');
        $data['area_type'] = $this->input->post('area_type');
        $data['price'] = $this->input->post('price');
        $data['price_type'] = $this->input->post('price_type');
        $data['installment'] = $this->input->post('installment');
        $data['property_status'] = $this->input->post('property_status');
        $data['rooms'] = $this->input->post('rooms');
        $data['bathroom'] = $this->input->post('bathroom');
        $data['dining_room'] = $this->input->post('dining_room');
        $data['living_room'] = $this->input->post('living_room');
        $data['bead_room'] = $this->input->post('bead_room');
        $data['other_room'] = $this->input->post('other_room');
        $data['shrine_room'] = $this->input->post('shrine_room');
        $data['year_built'] = $this->input->post('year_built');
        $data['swimming_pool'] = $this->input->post('swimming_pool');
        $data['securit'] = $this->input->post('securit');
        $data['air_conditioning'] = $this->input->post('air_conditioning');
        $data['wifi'] = $this->input->post('wifi');
        $data['balcony'] = $this->input->post('balcony');
        $data['cctv'] = $this->input->post('cctv');
        $data['car_parking'] = $this->input->post('car_parking');
        $data['dishwasher'] = $this->input->post('dishwasher');
        $data['generator'] = $this->input->post('generator');
        $data['near_church'] = $this->input->post('near_church');
        $data['garden'] = $this->input->post('garden');
        $data['gym'] = $this->input->post('gym');
        $data['lift'] = $this->input->post('lift');
        $data['play_ground'] = $this->input->post('play_ground');
        $data['water_heater'] = $this->input->post('water_heater');
        $data['mountain_view'] = $this->input->post('mountain_view');
        $data['pagoda_view'] = $this->input->post('pagoda_view');
        $data['sea_view'] = $this->input->post('sea_view');
        $data['lake_view'] = $this->input->post('lake_view');
        $data['city_view'] = $this->input->post('city_view');
        $data['garden_view'] = $this->input->post('garden_view');
        $data['river_view'] = $this->input->post('river_view');
        $data['showroom'] = $this->input->post('showroom');
        $data['restaurant'] = $this->input->post('restaurant');
        $data['office'] = $this->input->post('office');
        $data['warehouse'] = $this->input->post('warehouse');
        $data['description_mm'] = $this->input->post('description_mm');
        $data['description_eng'] = $this->input->post('description_eng');
        $data['status'] = 1;


        $this->form_validation->set_rules('title_mm', 'Title [Myanmar]', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');
        $this->form_validation->set_rules('township_id', 'Township', 'required');
        $this->form_validation->set_rules('property_type', 'Property Type', 'required');
        $this->form_validation->set_rules('member_id', 'Member', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'wmv|mp4|avi|mov';
        $config['max_size']             = 200000;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('video'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('danger', 'Video FIle Error');
        }else{
            $data = array('upload_data' => $this->upload->data());
            $video_data = $data['upload_data']['file_name'];
        }


        if ($this->form_validation->run() === FALSE){
            $user_permissions = $this->session->userdata('user_permissions');
            if ($user_permissions == 'agent') {
                $get_packages_plan = 'free_for_agent';
            }elseif ($user_permissions == 'by_owner') {
                $get_packages_plan = 'free_for_owner';
            }
            $member_id = $this->session->userdata('member_id');
            $data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);
            $data["packages"] = $this->dashboard_model->get_package($get_packages_plan);
            $data["already_posts"] = $this->dashboard_model->get_already_posts($member_id);

            $data["count_all"] = $this->for_sale_model->count_all();
            $data["property_types"] = $this->property_type_model->getAll();
            $data["regions"] = $this->region_model->getAll();
            $data["townships"] = $this->townships_model->getAll();
            $this->load->view('member/new_properties/index', $data);
        }else{
            $data['video'] = $video_data ?? "";
            $data['member_id'] = $this->session->userdata('member_id');
            $data["insert_id"] =  $this->member_properties_for_sale_model->insert($data);
            $this->session->set_flashdata('success', 'Added Successfully');
            $this->load->view('member/upload_file/index', $data);
        }

    }

}