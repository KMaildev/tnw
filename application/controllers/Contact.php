<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
    }

	public function index()
	{
		$data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
		$this->load->view('contact/index', $data);
	}
	

	public function suggestion()
	{
		$data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
		$this->load->view('contact/suggestion', $data);
	}

}
