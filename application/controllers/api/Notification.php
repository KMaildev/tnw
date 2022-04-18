<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Notification extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/notification_model');
    }

    public function index_get()
    {

        $notifications = $this->notification_model->getNotification();
        if(count($notifications) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Found",
                "data" => $notifications
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Not Found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
