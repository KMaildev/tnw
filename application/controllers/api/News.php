<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class News extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/news_model');
    }

    public function index_get($offset = 0)
    {
        $config = [
            'total_rows' => $this->news_model->count_all(),
            'per_page' => 30,
        ];

        $this->pagination->initialize($config);
        $news = $this->news_model->getAll($config['per_page'], $offset);

        if(count($news) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Found",
                "data" => $news
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
        $detail = $this->news_model->find_by_id($id);
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
