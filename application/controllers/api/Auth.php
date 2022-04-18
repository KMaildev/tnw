<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Auth extends REST_Controller {

	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->helper("security");

        $this->load->model('admin/developers_model');
        $this->load->model('api/auth_model');
        $this->load->library(array('form_validation'));
    }


    public function index_get()
    {
        $email = $this->security->xss_clean($this->input->get("email"));
        $password = $this->security->xss_clean($this->input->get("password"));

        if(!empty($email) && !empty($password)){
            $detail = $this->auth_model->getAll($email, $password);
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
        }else{
            $this->response(array(
                    "status" => 0,
                    "message" => "Not Found",
                ), REST_Controller::HTTP_NOT_FOUND);
        }
        
    }



    public function signup_get()
    {
        $email = $this->security->xss_clean($this->input->get("email"));
        $password = $this->security->xss_clean($this->input->get("password"));
        $company_name = $this->security->xss_clean($this->input->get("company_name"));
        $address = $this->security->xss_clean($this->input->get("address"));
        $contact_number = $this->security->xss_clean($this->input->get("contact_number"));
        $description = $this->security->xss_clean($this->input->get("description"));
        $user_permissions = $this->security->xss_clean($this->input->get("user_permissions"));
        $company_type = $this->security->xss_clean($this->input->get("company_type"));

        if(!empty($email) && !empty($password) && !empty($company_name) && !empty($address) && !empty($contact_number) && !empty($user_permissions) && !empty($company_type)){

            $checkEmail = $this->auth_model->checkEmail($email);
            if (!$checkEmail) {
                /*
                 * if email exists
                */
                $this->response(array(
                    "status" => 0,
                    "message" => "Email already registered"
                ) , REST_Controller::HTTP_ALREADY_REPORTED);
            }else{
                $count_number = $this->developers_model->count_all();
                $last = $count_number;
                $last++;
                $number = sprintf('%07d', $last);
                $company_ID = "U-". $number;

                $data = array(
                    'name' => $company_name,
                    'company_name' => $company_name,
                    'login_mail' => $email,
                    'confirm_mail' => $email,
                    "password" => $password,
                    'phone_no' => $contact_number,
                    'password' => md5($password),
                    'address' => $address,
                    'description' => $description,
                    'company_id' => $company_ID,
                    'user_permissions' => $user_permissions,
                    'company_type' => $company_type,
                );

                $insert_id = $this->auth_model->member_register($data);
                $check = $this->auth_model->latest_auth_check($insert_id);
                if ($check) {
                    $this->response(array(
                        "status" => 1,
                        "message" => "User has been created",
                        "data" => $check,
                    ), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        "status" => 0,
                        "message" => "Something Wrong"
                    ) , REST_Controller::HTTP_NOT_FOUND);
                }
            }

        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
        
    }


    public function changepassword_get()
    {

        $password = $this->security->xss_clean($this->input->get("password"));
        $userId = $this->security->xss_clean($this->input->get("userId"));

        if (!empty($password) && !empty($userId)) {
            $data = array(
                'password' => md5($password),
                'user_id' => $userId,
            );

            $success = $this->auth_model->ChangePassword($data);
            if ($success) {
                $this->response(array(
                    "status" => 1,
                    "message" => "Success",
                    "data" => $success,
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


    public function updateaccount_get()
    {
        $company_name = $this->security->xss_clean($this->input->get("company_name"));
        $address = $this->security->xss_clean($this->input->get("address"));
        $contact_number = $this->security->xss_clean($this->input->get("contact_number"));
        $description = $this->security->xss_clean($this->input->get("description"));
        $user_permissions = $this->security->xss_clean($this->input->get("user_permissions"));
        $company_type = $this->security->xss_clean($this->input->get("company_type"));
        $userId = $this->security->xss_clean($this->input->get("userId"));

        if(!empty($company_name) && !empty($address) && !empty($contact_number) && !empty($user_permissions && !empty($userId) && !empty($company_type))){

            $data = array(
                'name' => $company_name,
                'company_name' => $company_name,
                // 'login_mail' => $email,
                // 'confirm_mail' => $email,
                'phone_no' => $contact_number,
                'address' => $address,
                'description' => $description,
                'user_permissions' => $user_permissions,
                'company_type' => $company_type,
                'userId' => $userId,
            );

            $this->auth_model->UpdateAccount($data);
            $check = $this->auth_model->latest_auth_check_update($userId);
            if ($check) {
                $this->response(array(
                    "status" => 1,
                    "message" => "User has been created",
                    "data" => $check,
                ), REST_Controller::HTTP_OK);
            } else {
                $this->response(array(
                    "status" => 0,
                    "message" => "Something Wrong"
                ) , REST_Controller::HTTP_NOT_FOUND);
            }

        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
        
    }



    public function getdata_get($userId)
    {
        $check = $this->auth_model->latest_auth_check($userId);
        if ($check) {
            $this->response(array(
                "status" => 1,
                "message" => "GetData",
                "data" => $check,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function deletelogo_get($userId)
    {
        $check = $this->auth_model->deleteLogo($userId);
        if ($check) {
            $this->response(array(
                "status" => 1,
                "message" => "GetData",
                "data" => $check,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
    }



    function process_upload_post($userId)
    {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {

            $name = $this->upload->data('file_name');
            $data = array('upload_data' => $this->upload->data());

            $arr['logo'] = $name;
            $this->db->where('user_id', $userId);
            $this->db->update('user_info', $arr);

            $this->response(array(
                "status" => 1,
                "data" => $userId,
                "message" => "File Upload Success",
            ), REST_Controller::HTTP_OK);
            
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "File Upload Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
        
    }


}
