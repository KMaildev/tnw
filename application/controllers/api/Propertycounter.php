<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Propertycounter extends REST_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/property_counter_model');
    }

    public function index_get($id)
    {

        $member_id = $id;
        $total_sale = $this->property_counter_model->count_total_sale($member_id);
        $total_rent = $this->property_counter_model->count_total_rent($member_id);
        $total_new_properties = $this->property_counter_model->count_total_new_properties($member_id);
        $count_total_soldout = $this->property_counter_model->count_total_soldout($member_id);


        if($member_id){
            $this->response(array(
                "status" => 1,
                "total_sale" => $total_sale,
                "total_rent" => $total_rent,
                "total_new_properties" => $total_new_properties,
                "count_total_soldout" => $count_total_soldout,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
