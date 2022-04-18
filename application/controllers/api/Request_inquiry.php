<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Request_inquiry extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->helper("security");
        $this->load->model('api/request_inquiry_model');
    }



    public function index_get()
    {
        $name = $this->security->xss_clean($this->input->get("name"));
        $phone = $this->security->xss_clean($this->input->get("phone"));
        $email = $this->security->xss_clean($this->input->get("email"));
        $subjects = $this->security->xss_clean($this->input->get("subjects"));
        $description = $this->security->xss_clean($this->input->get("description"));
        $userId = $this->security->xss_clean($this->input->get("userId"));

        if(!empty($name) && !empty($phone) && !empty($description) && !empty($subjects)){

            $data = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'subject' => $subjects,
                'description' => $description,
                'userId' => $userId,
            );

            $this->request_inquiry_model->save_member_message($data);
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


    public function takeappointments_get()
    {
        $date = $this->security->xss_clean($this->input->get("date"));
        $time = $this->security->xss_clean($this->input->get("time"));
        $phone = $this->security->xss_clean($this->input->get("phone"));
        $userId = $this->security->xss_clean($this->input->get("userId"));

        if(!empty($date) && !empty($time)){

            $data = array(
                'date' => $date,
                'time' => $time,
                'phone' => $phone,
                'userId' => $userId,
            );

            $this->request_inquiry_model->save_appointment($data);
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



    public function contactus_get()
    {
        $name = $this->security->xss_clean($this->input->get("name"));
        $phone = $this->security->xss_clean($this->input->get("phone"));
        $email = $this->security->xss_clean($this->input->get("email"));
        $subjects = $this->security->xss_clean($this->input->get("subjects"));
        $description = $this->security->xss_clean($this->input->get("description"));

        if(!empty($name) && !empty($phone) && !empty($description) && !empty($subjects)){

            $data = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'subject' => $subjects,
                'description' => $description,
            );

            $this->request_inquiry_model->save_contactus($data);
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


    public function savesuggestion_get()
    {
        $name = $this->security->xss_clean($this->input->get("name"));
        $phone = $this->security->xss_clean($this->input->get("phone"));
        $description = $this->security->xss_clean($this->input->get("description"));

        if(!empty($name) && !empty($phone) && !empty($description)){

            $data = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'subject' => $subjects,
                'description' => $description,
            );

            $this->request_inquiry_model->save_suggestion($data);
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
