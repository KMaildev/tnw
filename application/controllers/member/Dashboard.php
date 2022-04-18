<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

		$this->load->model('member/dashboard_model');
		$this->load->model('member/packages_model');
	}

	public function index()
	{
		$user_permissions = $this->session->userdata('user_permissions');
		if ($user_permissions == 'agent') {
			$get_packages_plan = 'free_for_agent';
		} elseif ($user_permissions == 'by_owner') {
			$get_packages_plan = 'free_for_owner';
		}

		$member_id = $this->session->userdata('member_id');
		$data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);

		$data["packages"] = $this->dashboard_model->get_package($get_packages_plan);

		$data["already_posts"] = $this->dashboard_model->get_already_posts($member_id);
		$this->load->view('member/dashboard/index', $data);
	}
}
