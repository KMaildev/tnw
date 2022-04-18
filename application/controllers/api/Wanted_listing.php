<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Wanted_listing extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->helper("security");
        $this->load->model('api/wanted_model');
        $this->load->model('admin/shared/property_count_model');
    }

    
    public function index_get($propertyType, $offset = 0)
    {
        $config = [
            'total_rows' => $this->wanted_model->count_all($propertyType),
            'per_page' => 40,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->wanted_model->getAll($propertyType, $config['per_page'], $offset);
        if(count($property_list) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



    public function mywantedlist_get($userId, $offset = 0)
    {
        $config = [
            'total_rows' => $this->wanted_model->MyWantedListCount($userId),
            'per_page' => 40,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->wanted_model->MyWantedList($userId, $config['per_page'], $offset);
        if(count($property_list) > 0){
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function detail_get($id)
    {
        $property_detail = $this->wanted_model->find_by_id($id);
        if($property_detail){
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_detail,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function created_get()
    {
        $title = $this->security->xss_clean($this->input->get("title"));
        $property_type_id = $this->security->xss_clean($this->input->get("property_type_id"));
        $price_from = $this->security->xss_clean($this->input->get("price_from"));
        $price_to = $this->security->xss_clean($this->input->get("price_to"));
        $price_type = $this->security->xss_clean($this->input->get("price_type"));
        $property_status = $this->security->xss_clean($this->input->get("property_status"));
        $area = $this->security->xss_clean($this->input->get("area"));
        $area_type = $this->security->xss_clean($this->input->get("area_type"));
        $bathroom = $this->security->xss_clean($this->input->get("bathroom"));
        $bedroom = $this->security->xss_clean($this->input->get("bedroom"));
        $region_id = $this->security->xss_clean($this->input->get("region_id"));
        $township_id = $this->security->xss_clean($this->input->get("township_id"));
        $contact_number = $this->security->xss_clean($this->input->get("contact_number"));
        $description_mm = $this->security->xss_clean($this->input->get("description_mm"));
        $description_eng = $this->security->xss_clean($this->input->get("description_eng"));
        $floor = $this->security->xss_clean($this->input->get("floor"));
        $buy_rent_status = $this->security->xss_clean($this->input->get("buy_rent_status"));
        $userId = $this->security->xss_clean($this->input->get("userId"));
        $agent_allow_status = $this->security->xss_clean($this->input->get("agent_allow_status"));


        if(!empty($title) && !empty($buy_rent_status) && !empty($property_type_id) && !empty($price_from) && !empty($price_to) && !empty($price_type) && !empty($userId)){

            if ($buy_rent_status == 'want_to_buy') {
                $propertie_type = "WTB-";
            }elseif ($buy_rent_status == 'want_to_rent') {
                $propertie_type = "WTR-";
            }

            $propertie_type = $propertie_type; //sale or rent or new_property
            $count = $this->property_count_model->want_to_buy_rent_count($buy_rent_status);
            $last = $count;
            $last++;
            $number = sprintf('%06d', $last);
            $ad_number = $propertie_type . $number;


            $data = array(
                'ad_number' => $ad_number,
                'title' => $title,
                'property_type_id' => $property_type_id,
                "price_from" => $price_from,
                "price_to" => $price_to,
                'price_type' => $price_type,
                'property_status' => $property_status,
                'area' => $area,
                'area_type' => $area_type,
                'bathroom' => $bathroom,
                'bedroom' => $bedroom,
                'region_id' => $region_id,
                'township_id' => $township_id,
                'contact_number' => $contact_number,
                'description_mm' => $description_mm,
                'description_eng' => $description_eng,
                'floor' => $floor,
                'buy_rent_status' => $buy_rent_status,
                'userId' => $userId,
                'agent_allow_status' => $agent_allow_status,
            );

            $insert_id = $this->wanted_model->PropertyCreate($data);
            $this->wanted_model->want_to_buy_rent_count_create($data);
            if ($insert_id) {
                $this->response(array(
                    "status" => 1,
                    "data" => $insert_id,
                    "message" => "Success",
                ), REST_Controller::HTTP_OK);
            }

        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
        
    }



    public function updated_get()
    {
        $title = $this->security->xss_clean($this->input->get("title"));
        $property_type_id = $this->security->xss_clean($this->input->get("property_type_id"));
        $price_from = $this->security->xss_clean($this->input->get("price_from"));
        $price_to = $this->security->xss_clean($this->input->get("price_to"));
        $price_type = $this->security->xss_clean($this->input->get("price_type"));
        $property_status = $this->security->xss_clean($this->input->get("property_status"));
        $area = $this->security->xss_clean($this->input->get("area"));
        $area_type = $this->security->xss_clean($this->input->get("area_type"));
        $bathroom = $this->security->xss_clean($this->input->get("bathroom"));
        $bedroom = $this->security->xss_clean($this->input->get("bedroom"));
        $region_id = $this->security->xss_clean($this->input->get("region_id"));
        $township_id = $this->security->xss_clean($this->input->get("township_id"));
        $contact_number = $this->security->xss_clean($this->input->get("contact_number"));
        $description_mm = $this->security->xss_clean($this->input->get("description_mm"));
        $description_eng = $this->security->xss_clean($this->input->get("description_eng"));
        $floor = $this->security->xss_clean($this->input->get("floor"));
        $agent_allow_status = $this->security->xss_clean($this->input->get("agent_allow_status"));
        $w_id = $this->security->xss_clean($this->input->get("w_id"));


        if(!empty($title) && !empty($property_type_id) && !empty($price_from) && !empty($price_to) && !empty($price_type) && !empty($w_id)){

            $data = array(
                'title' => $title,
                'property_type_id' => $property_type_id,
                "price_from" => $price_from,
                "price_to" => $price_to,
                'price_type' => $price_type,
                'property_status' => $property_status,
                'area' => $area,
                'area_type' => $area_type,
                'bathroom' => $bathroom,
                'bedroom' => $bedroom,
                'region_id' => $region_id,
                'township_id' => $township_id,
                'contact_number' => $contact_number,
                'description_mm' => $description_mm,
                'description_eng' => $description_eng,
                'floor' => $floor,
                'w_id' => $w_id,
                'agent_allow_status' => $agent_allow_status,
            );

            $this->wanted_model->PropertyUpdate($data);
            $this->response(array(
                "status" => 1,
                "message" => "Success",
            ), REST_Controller::HTTP_OK);

        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
        
    }


    public function DeleteWanted_get($id)
    {
        $delete_wanted = $this->wanted_model->delete_wanted($id);
        if($delete_wanted){
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
