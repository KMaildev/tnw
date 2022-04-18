<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propertydetail extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
    }


	public function index($id)
	{
        $this->properties_list_model->viewer_count_update($id);

        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
        $data["data_detail"] = $this->properties_list_model->find_by_id($id);
        $data["data_photos"] = $this->properties_list_model->get_photo($id);
        $data["data_property_types"] = $this->properties_list_model->get_property_type();

        $propertie_type = $this->properties_list_model->find_propertie_type($id);
        $propertie_type = $propertie_type->propertie_type;
        $data["recent_for_sales"] = $this->properties_list_model->properties_home_page($propertie_type);
        
		$this->load->view('propertydetail/index', $data);
	}

}
