<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Agent extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/agent_model');
    }

    public function index_get($companyType, $offset = 0)
    {
        $config = [
            'total_rows' => $this->agent_model->count_all($companyType),
            'per_page' => 30,
        ];

        $this->pagination->initialize($config);
        $agent_list = $this->agent_model->getAll($companyType, $config['per_page'], $offset);

        if(count($agent_list) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Agent found",
                "data" => $agent_list
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Agent found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



    public function detail_get($id)
    {
        $agent_detail = $this->agent_model->find_by_id($id);
        if($agent_detail){
            $this->response(array(
                "status" => 1,
                "message" => "Agent found",
                "data" => $agent_detail,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Agent found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
