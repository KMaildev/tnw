<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Favorites extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->library('image_lib');
        $this->load->helper("security");
        $this->load->model('api/property_model');
        $this->load->model('api/favorites_property_model');
    }

    
    public function index_get($userId, $offset = 0)
    {
        $config = [
            'total_rows' => $this->favorites_property_model->count_all($userId),
            'per_page' => 10,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->favorites_property_model->getAll($userId, $config['per_page'], $offset);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if(count($property_list) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
                "data" => $property_list
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



    public function addfavorites_get($propertyId, $userId = 0)
    {
        if (!empty($userId)) {
            $insert_id =  $this->favorites_property_model->add_favorites_update($propertyId, $userId);
            if ($insert_id) {
                $this->response(array(
                    "status" => 1,
                    "data" => $insert_id,
                    "message" => "Success",
                ), REST_Controller::HTTP_OK);
            }
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
        

        
    }


    public function RemoveFavorites_get($id)
    {
        $favorites_property_model = $this->favorites_property_model->destroy($id);
        if($favorites_property_model){
            $this->response(array(
                "status" => 1,
                "message" => "Delete",
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


}
