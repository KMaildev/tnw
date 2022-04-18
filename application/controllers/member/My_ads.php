<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_ads extends CI_Controller
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

        $this->load->model('member/my_ads_model');
        $this->load->model('member/packages_model');
        $this->load->model('include/refres_ad_model');
    }

    public function index()
    {
        $this->load->view('member/my_ads/index');
    }

    public function for_sale($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $arr_data['propertie_type'] = 'for_sale';

        $config = [
            'base_url' => base_url('member/my_ads/for_sale'),
            'total_rows' => $this->my_ads_model->count_all($arr_data),
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
        $data["properties_ads"] = $this->my_ads_model->ger_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->my_ads_model->count_all($arr_data);

        $member_id = $this->session->userdata('member_id');
        $data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);
        $data["today_refresh_ad_counter"] = $this->refres_ad_model->get_today_refresh_ad_counter($member_id);
        $this->load->view('member/my_ads/for_sale', $data);
    }

    public function for_rent($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $arr_data['propertie_type'] = 'for_rent';

        $config = [
            'base_url' => base_url('member/my_ads/for_sale'),
            'total_rows' => $this->my_ads_model->count_all($arr_data),
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
        $data["properties_ads"] = $this->my_ads_model->ger_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->my_ads_model->count_all($arr_data);

        $member_id = $this->session->userdata('member_id');
        $data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);
        $data["today_refresh_ad_counter"] = $this->refres_ad_model->get_today_refresh_ad_counter($member_id);
        $this->load->view('member/my_ads/for_sale', $data);
    }

    public function new_properties($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $arr_data['propertie_type'] = 'new_properties';

        $config = [
            'base_url' => base_url('member/my_ads/for_sale'),
            'total_rows' => $this->my_ads_model->count_all($arr_data),
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
        $data["properties_ads"] = $this->my_ads_model->ger_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->my_ads_model->count_all($arr_data);

        $member_id = $this->session->userdata('member_id');
        $data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);
        $data["today_refresh_ad_counter"] = $this->refres_ad_model->get_today_refresh_ad_counter($member_id);
        $this->load->view('member/my_ads/for_sale', $data);
    }

    public function owner_sale_post($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $arr_data['propertie_type'] = 'by_owner_for_sale';

        $config = [
            'base_url' => base_url('member/my_ads/for_sale'),
            'total_rows' => $this->my_ads_model->count_all($arr_data),
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
        $data["properties_ads"] = $this->my_ads_model->ger_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->my_ads_model->count_all($arr_data);

        $member_id = $this->session->userdata('member_id');
        $data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);
        $data["today_refresh_ad_counter"] = $this->refres_ad_model->get_today_refresh_ad_counter($member_id);
        $this->load->view('member/my_ads/for_sale', $data);
    }

    public function owner_rent_post($offset = 0)
    {
        $arr_data['member_id'] = $this->session->userdata('member_id');
        $arr_data['propertie_type'] = 'by_owner_for_rent';

        $config = [
            'base_url' => base_url('member/my_ads/for_sale'),
            'total_rows' => $this->my_ads_model->count_all($arr_data),
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
        $data["properties_ads"] = $this->my_ads_model->ger_all_data($arr_data, $config['per_page'], $offset);
        $data["count_all"] = $this->my_ads_model->count_all($arr_data);

        $member_id = $this->session->userdata('member_id');
        $data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);
        $data["today_refresh_ad_counter"] = $this->refres_ad_model->get_today_refresh_ad_counter($member_id);
        $this->load->view('member/my_ads/for_sale', $data);
    }

    public function destroy($id, $user_info_id)
    {
        $user_info_id = $user_info_id;
        $member_id = $this->session->userdata('member_id');
        if ($user_info_id == $member_id) {
            $this->my_ads_model->destroy_properties($id);
            $this->my_ads_model->destroy_photo($id);
            $this->session->set_flashdata('success', 'Deleted successfully!');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('danger', 'Something wrong!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function soldout_status_soldout_now($id)
    {
        $this->my_ads_model->soldout_status_change($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function soldout_status_un_soldout($id)
    {
        $this->my_ads_model->soldout_status_un_soldout($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
