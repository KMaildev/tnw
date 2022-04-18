<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller {
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

		$this->load->model('member/changepassword_model');
	}

	public function index()
	{
		$this->load->view('member/changepassword/index');
	}

	public function change_password() {
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
		if ($this->form_validation->run() === FALSE){
			$this->load->view('member/changepassword/index');
		}else{
			$data['member_id'] = $this->member_id;
			$this->changepassword_model->change_password($data);
			$this->session->set_flashdata('success', 'Password Successfully Changed');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}



}
