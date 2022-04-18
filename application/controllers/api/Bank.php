<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Bank extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/bank_model');
    }

    public function index_get()
    {
        $banks = $this->bank_model->getAllBanks();
        if(count($banks) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Bank found",
                "data" => $banks,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Bank found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
