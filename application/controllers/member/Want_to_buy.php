<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Want_to_buy extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if (empty($this->member_id)) {
            redirect(base_url('member/auth/login'));
        } elseif (empty($this->member_email)) {
            redirect(base_url('member/auth/login'));
        }

        $this->load->model('admin/region_model');
        $this->load->model('admin/townships_model');
        $this->load->model('admin/property_type_model');

        $this->load->model('counter_model');
        $this->load->model('member/want_to_buy_rent_model');
        $this->load->model('admin/shared/property_count_model');
    }

    public function index()
    {
        $data["count_all"] = $this->counter_model->count_want_to_buy();
        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();
        $this->load->view('member/want_to_buy/index', $data);
    }

    public function save()
    {
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
        $this->form_validation->set_rules('phone', 'Phone', 'required');


        $ad_number = $this->input->post('ad_number');
        $propertie_type = $this->input->post('buy_rent_status'); //want_to_buy / want_to_rent
        $count = $this->property_count_model->want_to_buy_rent_counter($propertie_type);
        $last = $count;
        $last++;
        $number = sprintf('%06d', $last);
        $ad_number = $ad_number . $number;
        $data['ad_number'] = $ad_number;
        $checkData = array(
            'ad_number' => $ad_number,
        );
        $checkAdNumber = $this->property_count_model->want_to_number_check_already($checkData);
        if ($checkAdNumber != false) {
            $data["count_all"] = $this->counter_model->count_want_to_buy();
            $data["property_types"] = $this->property_type_model->getAll();
            $data["regions"] = $this->region_model->getAll();
            $data["townships"] = $this->townships_model->getAll();
            // $this->load->view('member/want_to_buy/index', $data);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if ($this->form_validation->run() === FALSE) {
                $data["count_all"] = $this->counter_model->count_want_to_buy();
                $data["property_types"] = $this->property_type_model->getAll();
                $data["regions"] = $this->region_model->getAll();
                $data["townships"] = $this->townships_model->getAll();
                // $this->load->view('member/want_to_buy/index', $data);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $data['member_id'] = $this->session->userdata('member_id');
                $this->want_to_buy_rent_model->save($data);
                $this->want_to_buy_rent_model->save_want_to_buy_rent_count($data);
                $this->session->set_flashdata('success', 'Added Successfully');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function buy_list($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $arr_data['propertie_type'] = 'want_to_buy';

        $config = [
            'base_url' => base_url('member/want_to_buy/list_of_posts'),
            'total_rows' => $this->want_to_buy_rent_model->count_all($arr_data),
            'per_page' => 50,
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
        $data["list_of_posts"] = $this->want_to_buy_rent_model->get_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->want_to_buy_rent_model->count_all($arr_data);
        $this->load->view('member/want_to_buy/list_of_posts', $data);
    }

    public function rent_list($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $arr_data['propertie_type'] = 'want_to_rent';

        $config = [
            'base_url' => base_url('member/want_to_buy/list_of_posts'),
            'total_rows' => $this->want_to_buy_rent_model->count_all($arr_data),
            'per_page' => 50,
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
        $data["list_of_posts"] = $this->want_to_buy_rent_model->get_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->want_to_buy_rent_model->count_all($arr_data);
        $this->load->view('member/want_to_buy/list_of_posts', $data);
    }

    public function destroy($id)
    {
        $this->want_to_buy_rent_model->destroy($id);
        $this->session->set_flashdata('success', 'Destroyed successfully!');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function edit($id)
    {
        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();
        $data['detail'] = $this->want_to_buy_rent_model->find_by_id($id);
        $this->load->view('member/want_to_buy/edit', $data);
    }

    public function update()
    {
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
        $this->form_validation->set_rules('want_to_buy_rent_id', 'ID', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Something wrong');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->want_to_buy_rent_model->update();
            $this->session->set_flashdata('success', 'Added Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
