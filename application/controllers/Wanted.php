<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wanted extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        $this->load->model('frontend/properties_list_model');
        $this->load->model('frontend/wanted_list_model');
        $this->load->model('member/packages_model');
    }


	public function want_to_buy($offset = 0)
	{
		$arr['propertie_type'] = 'want_to_buy';
		$config = [
            'base_url' => base_url('wanted/want_to_buy'),
            'total_rows' => $this->wanted_list_model->count_all($arr),
            'per_page' => 40,
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
        $data["want_to_buy_lists"] = $this->wanted_list_model->getAll($arr, $config['per_page'], $offset);
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
		$this->load->view('wanted/want_to_buy', $data);
	}

	public function want_to_rent($offset = 0)
	{
        $arr['propertie_type'] = 'want_to_rent';
        $config = [
            'base_url' => base_url('wanted/want_to_rent'),
            'total_rows' => $this->wanted_list_model->count_all($arr),
            'per_page' => 40,
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
        $data["want_to_buy_lists"] = $this->wanted_list_model->getAll($arr, $config['per_page'], $offset);
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $this->load->view('wanted/want_to_rent', $data);
	}

	public function show($id)
	{
        $this->wanted_list_model->viewer_count_update($id);
        
        $member_id = $this->session->userdata('member_id');

        $user_permissions = $this->session->userdata('user_permissions');
        if ($user_permissions == 'agent') {
            $get_packages_plan = 'free_for_agent';
        }elseif ($user_permissions == 'by_owner') {
            $get_packages_plan = 'free_for_owner';
        }
        $member_id = $this->session->userdata('member_id');
        $data["active_package_for_wanted"] = $this->packages_model->active_package_for_wanted($member_id);
        
		$data['detail'] =  $this->wanted_list_model->find_by_id($id);
		$this->load->view('wanted/show', $data);
	}
}