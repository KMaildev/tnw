<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Forgotpassword extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->helper("security");

        $this->load->model('admin/developers_model');
        $this->load->model('api/auth_model');
        $this->load->library(array('form_validation'));
        $this->load->model('member/forgot_password_model');
    }


    public function resetpassword_get()
    {

        $email = $this->security->xss_clean($this->input->get("email"));

        if (!empty($email)) {
            
            $findemail = $this->forgot_password_model->ForgotPassword($email);
            if ($findemail) {
                $this->forgot_password_model->sendpassword($findemail);
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

        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
