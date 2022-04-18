<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Townships extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
        $this->load->model('admin/region_model');
        $this->load->model('admin/townships_model');
    }

	
	public function index()
	{
        $data["townships"] = $this->townships_model->getAll();
        $data["regions"] = $this->region_model->getAll();
		$this->load->view('admin/townships/index', $data);
	}

    public function add_townships() {
        $data['regions_id'] = $this->input->post('region_id');
        $data['townships'] = $this->input->post('townships');
        $data['townships_mm'] = $this->input->post('townships_mm');
        $data['status'] = 1;
        $this->form_validation->set_rules('region_id', 'Region ID', 'required');
        $this->form_validation->set_rules('townships', 'Townships', 'required');
        $this->form_validation->set_rules('townships_mm', 'Townships Myanmar', 'required');
        if ($this->form_validation->run() === FALSE){ 
            $this->load->view('admin/townships/index');
        }else{
            $this->townships_model->insert($data);
            $this->session->set_flashdata('success', 'Townships added Successfully');
            redirect('main/townships');
        }
        
    }

}
