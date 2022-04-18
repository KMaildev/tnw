<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Propertybycompany extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->library('image_lib');
        $this->load->helper("security");
        $this->load->model('api/property_model');
    }

    
    public function index_get($propertyType, $UserId)
    {
        $property_list = $this->property_model->get_property_by_company($propertyType, $UserId);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if(count($property_list) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
                "data" => $property_list
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



}
