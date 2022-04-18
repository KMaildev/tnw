<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_data extends CI_Controller {
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

		$this->load->model('counter_model');
	}

	public function index()
	{
		$member_id = $this->session->userdata('member_id');
		$data['total_sale'] = $this->counter_model->count_total_sale($member_id);
		$data['total_rent'] = $this->counter_model->count_total_rent($member_id);
		$data['total_new_properties'] = $this->counter_model->count_total_new_properties($member_id);
		$data['total_owner_sale'] = $this->counter_model->total_owner_sale($member_id);
		$data['total_owner_rent'] = $this->counter_model->total_owner_rent($member_id);
		$data['total_want_to_buy'] = $this->counter_model->total_want_to_buy($member_id);
		$data['total_want_to_rent'] = $this->counter_model->total_want_to_rent($member_id);

		$data['count_total_soldout'] = $this->counter_model->count_total_soldout($member_id);
		
		$this->load->view('member/my_data/index', $data);
	}


}
