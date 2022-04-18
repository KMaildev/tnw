<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
        $this->load->model('admin/testimonials_model');
    }

	public function index()
	{
		$data["data_regions"] = $this->properties_list_model->get_regions();
		$data["testimonials"] = $this->testimonials_model->getAllFrontEnd();
		$this->load->view('frontend/testimonials/index', $data);
	}


	public function category($id)
	{
		$data["data_regions"] = $this->properties_list_model->get_regions();
		$data["testimonials"] = $this->testimonials_model->find_by_region($id);
		$this->load->view('frontend/testimonials/index', $data);
	}

}
