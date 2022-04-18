<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member/login_model');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('url', 'html', 'form'));
		$this->load->model('admin/datacheck_model');
		$this->load->model('admin/developers_model');
	}


	public function login()
	{
		$this->load->view('member/auth/login');
	}

	public function member_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter your %s');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('member/auth/login');
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			);

			$check = $this->login_model->auth_check($data);
			if ($check == true) {
				$account_status = $check->suspended_status;
				if ($account_status == 1) {
					$user = array(
						'member_id' => $check->user_id,
						'name' => $check->name,
						'email' => $check->email,
						'role' => $check->user_role,
						'package_id' => $check->package_id,
						'user_permissions' => $check->user_permissions,
					);
					$this->session->set_userdata($user);
					redirect(base_url('member/dashboard'));
				} elseif ($account_status == 0) {
					$this->session->set_flashdata('danger', 'This Account Has Been Suspended');
					$this->load->view('member/auth/login');
				} else {
					$this->session->set_flashdata('danger', 'Email or Password is incorrect');
					$this->load->view('member/auth/login');
				}
			} else {
				$this->session->set_flashdata('danger', 'Email or Password is incorrect');
				$this->load->view('member/auth/login');
			}
			$this->session->set_flashdata('danger', 'Email or Password is incorrect');
			$this->load->view('member/auth/login');
		}
	}

	public function register()
	{
		$this->load->view('member/auth/register');
	}

	public function member_register()
	{

		$this->form_validation->set_rules(
			'phone_number',
			'Please Enter Phone number or email',
			'required|is_unique[user_info.email]|callback_clean_postcode',
			array(
				'is_unique'     => 'Phone number or email is already exists.'
			)
		);

		$this->form_validation->set_rules('password', 'Enter Password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Enter Password Confirmation', 'required|matches[password]');

		$this->form_validation->set_rules('company_name', 'Company name or username', 'required|max_length[50]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone_no', 'Phone No.', 'required');
		$this->form_validation->set_rules('user_permissions', 'Type', 'trim|required');
		$this->form_validation->set_rules('accept_terms', 'Please read and accept our terms and conditions.', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', ' %s');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('member/auth/register');
		} else {
			$count_number = $this->developers_model->count_all();
			$last = $count_number;
			$last++;
			$number = sprintf('%07d', $last);
			$company_ID = "U-" . $number;

			$data = array(
				'name' => $this->input->post('company_name'),
				'company_name' => $this->input->post('company_name'),
				'login_mail' => $this->input->post('phone_number'),
				'confirm_mail' => $this->input->post('email'),
				'phone_no' => $this->input->post('phone_no'),
				'password' => md5($this->input->post('password')),
				'company_type' => $this->input->post('user_permissions'),
				'address' => $this->input->post('address'),
				'description' => $this->input->post('description'),
				'company_id' => $company_ID,
			);

			$insert_id = $this->login_model->member_register($data);
			$check = $this->login_model->latest_auth_check($insert_id);

			if ($check != false) {
				$user = array(
					'member_id' => $check->user_id,
					'name' => $check->name,
					'email' => $check->email,
					'role' => $check->user_role,
					'package_id' => $check->package_id,
					'user_permissions' => $check->user_permissions,
				);

				$this->session->set_userdata($user);
				redirect(base_url('member/dashboard'));
			}
			$this->load->view('member/auth/register');
		}
	}

	function clean_postcode($str) {
	    $str = str_replace("-", "",$str);
	    $str = str_replace(" ", "",$str);
	    return $str;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$array_unset_session = array('member_id', 'name', 'email');
		$this->session->unset_userdata($array_unset_session);
		redirect(base_url('member/auth/login'));
	}
}
