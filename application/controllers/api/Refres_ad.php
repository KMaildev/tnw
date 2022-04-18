<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Refres_ad extends REST_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/refreshad_model');
    }

    public function index_get($id)
    {
        $today_refresh_ad_counter = $this->refreshad_model->get_today_refresh_ad_counter($id);
        
        $today_refresh_ad_counter = $today_refresh_ad_counter->no_of_refresh;
        

        if($today_refresh_ad_counter){
            $this->response(array(
                "status" => 1,
                "today_refresh_ad_counter" => $today_refresh_ad_counter,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



}
