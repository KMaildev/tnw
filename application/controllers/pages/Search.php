<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('frontend/properties_list_model');
        $this->load->model('frontend/agents_model');
        $this->load->model('include/site_viewer_model');

        $this->load->model('admin/dashboard_model');
        $this->load->model('frontend/latest_news_model');
        $this->load->model('admin/testimonials_model');
    }

	public function index()
	{
		$data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();

        $data["for_sale_properties"] = $this->properties_list_model->properties_home_page('for_sale');

		$this->load->view('frontend/search/index', $data);
	}

}
