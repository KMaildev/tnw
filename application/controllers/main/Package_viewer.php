<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_viewer extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
        $this->load->model('admin/package_viewer_model');
    }

	
	public function index()
	{
        $data["package_viewers"] = $this->package_viewer_model->getAll();
		$this->load->view('admin/package_viewer/index', $data);
	}

}
