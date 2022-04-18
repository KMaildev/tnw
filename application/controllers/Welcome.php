<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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

        $this->site_viewer_model->site_viewer_update();
        $data['site_viewer_total'] = $this->site_viewer_model->get_site_viewer();

        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();

        $data["for_sale_properties"] = $this->properties_list_model->properties_home_page('for_sale');
        $data["for_rent_properties"] = $this->properties_list_model->properties_home_page('for_rent');
        $data["new_homepage_properties"] = $this->properties_list_model->properties_home_page('new_properties');


        $data["home_page_agents"] = $this->agents_model->home_page_agents();

        $data['total_sale'] = $this->dashboard_model->count_total_sale();
        $data['total_rent'] = $this->dashboard_model->count_total_rent();
        $data['total_new_properties'] = $this->dashboard_model->count_total_new_properties();
        $data['total_owner_sale'] = $this->dashboard_model->total_owner_sale();
        $data['total_owner_rent'] = $this->dashboard_model->total_owner_rent();
        $data['recent_latest_news'] = $this->latest_news_model->recent_latest_news();

        $data["testimonials"] = $this->testimonials_model->getAllFrontEnd();


        $data["top_featured_properties"] = $this->properties_list_model->top_featured_properties('for_sale', 'Yes');

        $this->load->view('welcome_message', $data);
    }
}
