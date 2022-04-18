<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Homeloanapplication extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->helper("security");
        $this->load->model('api/homeloanapplication_model');
    }



    public function index_get()
    {
        $name = $this->security->xss_clean($this->input->get("name"));
        $phone = $this->security->xss_clean($this->input->get("phone"));
        $email = $this->security->xss_clean($this->input->get("email"));
        $date_of_birth = $this->security->xss_clean($this->input->get("date_of_birth"));
        $current_address = $this->security->xss_clean($this->input->get("current_address"));
        $employment_status = $this->security->xss_clean($this->input->get("employment_status"));
        $monthly_income_status = $this->security->xss_clean($this->input->get("monthly_income_status"));
        $homeloan_application_type = $this->security->xss_clean($this->input->get("homeloan_application_type"));
        $bank_type = $this->security->xss_clean($this->input->get("bank_type"));
        $property_type_id = $this->security->xss_clean($this->input->get("type_of_property_id"));
        $region_id = $this->security->xss_clean($this->input->get("region_id"));
        $township_id = $this->security->xss_clean($this->input->get("township_id"));

        if(!empty($name) && !empty($phone) && !empty($email)){

            $data = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'date_of_birth' => $date_of_birth,
                'current_address' => $current_address,
                'employment_status' => $employment_status,
                'monthly_income_status' => $monthly_income_status,
                'homeloan_application_type' => $homeloan_application_type,
                'bank_type' => $bank_type,
                'property_type_id' => $property_type_id,
                'region_id' => $region_id,
                'township_id' => $township_id,
            );

            $this->homeloanapplication_model->save_home_loan_application($data);
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


}
