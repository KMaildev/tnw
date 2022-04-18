<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}

        $this->load->model('admin/region_model');
    }

	
	public function index()
	{
        $data["regions"] = $this->region_model->getAll();
		$this->load->view('admin/region/index', $data);
	}

    public function add_region() {
        $data['region'] = $this->input->post('region');
        $data['region_mm'] = $this->input->post('region_mm');
        $data['status'] = 1;
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('region_mm', 'Region Myanmar', 'required');
        if ($this->form_validation->run() === FALSE){ 
            $this->load->view('admin/region/index');
        }else{
            $this->region_model->insert($data);
            $this->session->set_flashdata('success', 'Region added Successfully');
            redirect('main/region');
        }
        
    }

}
