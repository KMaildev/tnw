<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_type extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}

        $this->load->model('admin/property_type_model');
    }

	
	public function index()
	{
        $data["property_types"] = $this->property_type_model->getAll();
		$this->load->view('admin/property_type/index', $data);
	}

    public function add_property_type() {

        $this->form_validation->set_rules('property_type', 'Property Type', 'required');
        if ($this->form_validation->run() === FALSE){ 
            $this->load->view('admin/property_type/index');
        }else{
            $data['property_type'] = $this->input->post('property_type');
            $data['property_type_mm'] = $this->input->post('property_type_mm');
            $data['status'] = 1;
            $this->property_type_model->insert($data);
            $this->session->set_flashdata('success', 'Property Type added Successfully');
            redirect('main/property_type');
        }
        
    }

}
