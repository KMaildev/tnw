<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}

		$this->load->model('admin/dashboard_model');
		$this->load->model('include/site_viewer_model');
    }

	public function index()
	{

		$data['site_viewer_total'] = $this->site_viewer_model->get_site_viewer();
		$data['total_sale'] = $this->dashboard_model->count_total_sale();
		$data['total_rent'] = $this->dashboard_model->count_total_rent();
		$data['total_new_properties'] = $this->dashboard_model->count_total_new_properties();
		$data['total_owner_sale'] = $this->dashboard_model->total_owner_sale();
		$data['total_owner_rent'] = $this->dashboard_model->total_owner_rent();
		$data['total_want_to_buy'] = $this->dashboard_model->total_want_to_buy();
		$data['total_want_to_rent'] = $this->dashboard_model->total_want_to_rent();
		$this->load->view('admin/dashboard', $data);
	}
}
