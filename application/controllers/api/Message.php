<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Message extends REST_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();


        $this->load->model('api/message_model');
    }

    public function index_get($userId)
    {
        $messages = $this->message_model->getAll($userId);
        if(count($messages) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Data Found",
                "data" => $messages
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Data Found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function messageDetail_get($MessageId)
    {
        $message = $this->message_model->messageDetail($MessageId);
        if($message){
            $this->response(array(
                "status" => 1,
                "message" => "Data Found",
                "data" => $message
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Data Found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
