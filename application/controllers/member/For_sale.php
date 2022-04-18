<?php
defined('BASEPATH') or exit('No direct script access allowed');

class For_sale extends CI_Controller
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
		$this->load->model('admin/for_sale_model');
		$this->load->model('admin/property_type_model');
		$this->load->model('admin/region_model');
		$this->load->model('admin/townships_model');
		$this->load->model('counter_model');
		$this->load->model('member/packages_model');

		$this->load->model('member/member_properties_for_sale_model');
		$this->load->model('admin/shared/property_count_model');
		$this->load->model('admin/shared/property_create_model');
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

		$data["count_all"] = $this->counter_model->for_sale_counter();
		$data["property_types"] = $this->property_type_model->getAll();
		$data["regions"] = $this->region_model->getAll();
		$data["townships"] = $this->townships_model->getAll();

		$data["video_counters"] = $this->counter_model->member_video_counter($member_id);

		$this->load->view('member/for_sale/index', $data);
	}

	public function save()
	{
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
		if (!$this->upload->do_upload('video')) {
			$error = array('error' => $this->upload->display_errors());
			// $this->session->set_flashdata('danger', 'Video File Error');
		} else {
			$data = array('upload_data' => $this->upload->data());
			$video_data = $data['upload_data']['file_name'];
		}

		$contact_number_field = $this->input->post('contact_number');
		if ($contact_number_field == '') {
			$data['contact_number'] = NULL;
		} else {
			$total = count($contact_number_field);
			$contact_number = [];
			for ($i = 0; $i < $total; $i++) {
				$contact_number[] = $contact_number_field[$i];
			}
			$data['contact_number'] = implode(',', $contact_number);
		}

		$ad_number = $this->input->post('ad_number');
		$propertie_type = $this->input->post('propertie_type'); //sale or rent or new_property
		$count = $this->property_count_model->property_count($propertie_type);
		$last = $count;
		$last++;
		$number = sprintf('%06d', $last);
		$ad_number = $ad_number . $number;
		$data['ad_number'] = $ad_number;
		$checkData = array(
			'ad_number' => $ad_number,
		);

		$checkAdNumber = $this->property_count_model->adnumber_check_already($checkData);
		if ($checkAdNumber != false) {
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

			$data["count_all"] = $this->for_sale_model->count_all();
			$data["property_types"] = $this->property_type_model->getAll();
			$data["regions"] = $this->region_model->getAll();
			$data["townships"] = $this->townships_model->getAll();
			$data["video_counters"] = $this->counter_model->member_video_counter($member_id);
			$this->session->set_flashdata('danger', 'Something Wrong Please Try Again');
			$this->load->view('member/for_sale/index', $data);
		} else {
			if ($this->form_validation->run() === FALSE) {
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

				$data["count_all"] = $this->for_sale_model->count_all();
				$data["property_types"] = $this->property_type_model->getAll();
				$data["regions"] = $this->region_model->getAll();
				$data["townships"] = $this->townships_model->getAll();
				$data["video_counters"] = $this->counter_model->member_video_counter($member_id);
				$this->load->view('member/for_sale/index', $data);
			} else {
				$data['video'] = $video_data ?? "";
				$data['member_id'] = $this->session->userdata('member_id');
				$data["insert_id"] =  $this->member_properties_for_sale_model->insert($data);
				$this->member_properties_for_sale_model->insert_properties_counter($data);
				$this->session->set_flashdata('success', 'Added Successfully');
				$this->load->view('member/upload_file/index', $data);
			}
		}
	}


	public function edit($id)
	{

		$member_id = $this->session->userdata('member_id');
		$data["my_active_packages"] = $this->packages_model->get_my_active_packages($member_id);

		$data["property_types"] = $this->property_type_model->getAll();
		$data["regions"] = $this->region_model->getAll();
		$data["townships"] = $this->townships_model->getAll();
		$data['region_by_id'] = $this->for_sale_model->find_by_region($id);
		$data["detail"] = $this->for_sale_model->getDataById($id);
		$this->load->view('member/for_sale/edit', $data);
	}

	public function update()
	{
		$this->form_validation->set_rules('title_mm', 'Title [Myanmar]', 'required');
		$this->form_validation->set_rules('region_id', 'Region', 'required');
		$this->form_validation->set_rules('township_id', 'Township', 'required');
		$this->form_validation->set_rules('property_type', 'Property Type', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('propertie_id', 'Properties ID', 'required');

		$video_value =  $this->input->post('video_value');

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'wmv|mp4|avi|mov';
		$config['max_size']             = 200000;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('video')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
			$video_data = $data['upload_data']['file_name'];
		}

		$contact_number_field = $this->input->post('contact_number');
		if ($contact_number_field == '') {
			$data['contact_number'] = NULL;
		} else {
			$total = count($contact_number_field);
			$contact_number = [];
			for ($i = 0; $i < $total; $i++) {
				$contact_number[] = $contact_number_field[$i];
			}
			$data['contact_number'] = implode(',', $contact_number);
		}


		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('danger', 'Something wrong');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$data['video'] = $video_data ?? $video_value;
			$this->member_properties_for_sale_model->update($data);
			$this->session->set_flashdata('success', 'Updated Successfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function photo_edit($id)
	{
		$data["photos"] = $this->for_sale_model->getDataByPhoto($id);
		$data["property_member_data"] = $this->for_sale_model->getDataByIdMember($id);
		$data['insert_id'] = $id;
		$this->load->view('member/upload_file/photo_edit', $data);
	}

	public function photo_remove($id)
	{
		$this->for_sale_model->photo_remove($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
