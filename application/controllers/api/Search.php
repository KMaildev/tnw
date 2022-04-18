<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Search extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/search_model');
        $this->load->model('api/property_model');
    }

    public function index_get()
    {
        $ad_number = $this->security->xss_clean($this->input->get("ad_number"));
        $property_list = $this->search_model->findAdNumber($ad_number);
        $tatnaywon = $this->property_model->tatnaywon_company();
        if($ad_number){
            $this->response(array(
                "status" => 1,
                "message" => "Found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Ad Number found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function propertysearch_get()
    {
        $offset = $this->security->xss_clean($this->input->get("page"));
        $type_of_property = $this->security->xss_clean($this->input->get("type_of_property"));
        $region_id = $this->security->xss_clean($this->input->get("region_id"));
        $township_id = $this->security->xss_clean($this->input->get("township_id"));
        $TypeId = $this->security->xss_clean($this->input->get("TypeId"));
        $from_price = $this->security->xss_clean($this->input->get("from_price"));
        $to_price = $this->security->xss_clean($this->input->get("to_price"));
        $bankinstallment = $this->security->xss_clean($this->input->get("bankinstallment"));
        

        $arr['type_of_property'] = $type_of_property;
        $arr['region_id'] = $region_id;
        $arr['township_id'] = $township_id;
        $arr['TypeId'] = $TypeId;
        $arr['from_price'] = $from_price;
        $arr['to_price'] = $to_price;
        $arr['bankinstallment'] = $bankinstallment;

        $config = [
            'total_rows' => $this->search_model->findPropertyCountAll($arr),
            'per_page' => 20,
        ];
        $this->pagination->initialize($config);

        $property_list = $this->search_model->findPropertyAll($arr, $config['per_page'], $offset);
        $tatnaywon = $this->property_model->tatnaywon_company();
        if($property_list){
            $this->response(array(
                "status" => 1,
                "message" => "Found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Ad Number found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
