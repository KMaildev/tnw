<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Appointment extends REST_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();


        $this->load->model('api/appointment_model');
    }

    public function index_get($userId)
    {
        $appointments = $this->appointment_model->getAll($userId);
        if(count($appointments) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Data Found",
                "data" => $appointments,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Data Found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


}
