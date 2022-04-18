<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Property_type extends REST_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/property_type_model');
    }

    public function index_get()
    {
        $property_type = $this->property_type_model->getAll();
        if(count($property_type) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Data Found",
                "data" => $property_type
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Data Found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
