<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class City extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/city_model');
    }

    public function index_get()
    {
        $regions = $this->city_model->getAllRegion();
        if(count($regions) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Region found",
                "data" => $regions
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Region found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function townships_get()
    {
        $townships = $this->city_model->getAllTownships();
        if(count($townships) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Township found",
                "data" => $townships
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Region found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    
    public function detail_get($id)
    {
        $townships = $this->city_model->find_by_id($id);
        if($townships){
            $this->response(array(
                "status" => 1,
                "message" => "townships found",
                "data" => $townships,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Township found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
