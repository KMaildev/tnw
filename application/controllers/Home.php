<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
        $this->load->model('frontend/agents_model');
        $this->load->model('include/site_viewer_model');

        $this->load->model('admin/dashboard_model');
    }

	public function index()
	{
        $this->session->set_userdata('lang', 'myanmar');
        redirect(site_url('welcome'));
	}
	
}