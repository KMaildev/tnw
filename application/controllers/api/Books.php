<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Books extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/books_model');
    }

    public function index_get($offset = 0)
    {
        $config = [
            'total_rows' => $this->books_model->count_all(),
            'per_page' => 30,
        ];

        $this->pagination->initialize($config);
        $books = $this->books_model->getAll($config['per_page'], $offset);

        if(count($books) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Found",
                "data" => $books
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Not Found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function detail_get($id)
    {
        $detail = $this->books_model->find_by_id($id);
        if($detail){
            $this->response(array(
                "status" => 1,
                "message" => "Found",
                "data" => $detail,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Not Found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
