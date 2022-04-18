<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Package extends REST_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('api/package_model');
    }

    public function index_get($id)
    {
        $free_package = $this->package_model->get_free_package();
        $paid_package = $this->package_model->get_paid_package($id);
        $free_and_paid = $free_package->no_of_posts + $paid_package->no_of_posts;

        if($free_package){
            $this->response(array(
                "status" => 1,
                "free_package" => $free_package,
                "paid_package" => $paid_package,
                "free_and_paid" => $free_and_paid,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function paidpackage_get($id)
    {
        $paid_package_info = $this->package_model->get_paid_package($id);
        $paid_package = $paid_package_info->no_of_posts;
        if($paid_package){
            $this->response(array(
                "status" => 1,
                "paid_package" => $paid_package,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    
    public function featuredpost_get($id)
    {
        $paid_package_info = $this->package_model->get_paid_featured_package($id);
        $featuredpost = $paid_package_info->post_per_month;
        if($featuredpost){
            $this->response(array(
                "status" => 1,
                "featuredpost" => $featuredpost,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    
    public function number_of_refresh_daily_get($id)
    {
        $paid_package_info = $this->package_model->get_number_of_refresh_daily($id);
        $number_of_refresh_daily = $paid_package_info->refresh_daily;
        if($number_of_refresh_daily){
            $this->response(array(
                "status" => 1,
                "number_of_refresh_daily" => $number_of_refresh_daily,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function alreadyposts_get($id)
    {
        $already_posts = $this->package_model->get_already_posts($id);
        if($already_posts){
            $this->response(array(
                "status" => 1,
                "already_posts" => $already_posts,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
                "already_posts" => 0,
            ), REST_Controller::HTTP_OK);
        }
    }


    public function orderhistory_get($id)
    {
        $orderhistory = $this->package_model->orderhistory($id);
        if($orderhistory){
            $this->response(array(
                "status" => 1,
                "orderhistory" => $orderhistory,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



    public function allpackages_get()
    {
        $allpackages = $this->package_model->get_all_package();
        if($allpackages){
            $this->response(array(
                "status" => 1,
                "data" => $allpackages,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function packagedetail_get($id)
    {
        $allpackages = $this->package_model->packagedetail($id);
        if($allpackages){
            $this->response(array(
                "status" => 1,
                "data" => $allpackages,
            ), REST_Controller::HTTP_OK);
        }else{
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



    public function ordernow_get()
    {
        $contactstatus = $this->security->xss_clean($this->input->get("contactstatus"));
        $choose_payment_status = $this->security->xss_clean($this->input->get("choose_payment_status"));
        $BillingCycle = $this->security->xss_clean($this->input->get("BillingCycle"));
        $package_id = $this->security->xss_clean($this->input->get("package_id"));
        
        $bank_id = $this->security->xss_clean($this->input->get("bank_id"));

        $OneMonthlyPrice = $this->security->xss_clean($this->input->get("OneMonthlyPrice"));
        $ThreeMonthlyPrice = $this->security->xss_clean($this->input->get("ThreeMonthlyPrice"));
        $ThreeFullPrice = $this->security->xss_clean($this->input->get("ThreeFullPrice"));
        $SixMonthlyPrice = $this->security->xss_clean($this->input->get("SixMonthlyPrice"));
        $SixFullPrice = $this->security->xss_clean($this->input->get("SixFullPrice"));

        $user_id = $this->security->xss_clean($this->input->get("user_id"));

        if(!empty($contactstatus) && !empty($choose_payment_status) && !empty($BillingCycle) && !empty($user_id)){


            if ($BillingCycle == '1') {
                $end_date = date('Y-m-d', strtotime('+1 month'));
                $order_price = $OneMonthlyPrice;
                $BillingCycle = 1;
                $payment_status = 'Full Payment';
            } elseif ($BillingCycle == '3MonthsContractMonthlyPayment') {
                $end_date = date('Y-m-d', strtotime('+3 month'));
                $order_price = $ThreeMonthlyPrice;
                $BillingCycle = 3;
                $payment_status = 'Per Months';
            } elseif ($BillingCycle == '3MonthsFullPayment') {
                $end_date = date('Y-m-d', strtotime('+3 month'));
                $order_price = $ThreeFullPrice;
                $BillingCycle = 3;
                $payment_status = 'Full Payment';
            } elseif ($BillingCycle == '6MonthsContractMonthlyPayment') {
                $end_date = date('Y-m-d', strtotime('+6 month'));
                $order_price = $SixMonthlyPrice;
                $BillingCycle = 6;
                $payment_status = 'Per Months';
            } elseif ($BillingCycle == '6MonthsFullPayment') {
                $end_date = date('Y-m-d', strtotime('+6 month'));
                $order_price = $SixFullPrice;
                $BillingCycle = 6;
                $payment_status = 'Full Payment';
            }


            $data = array(
                'contact' => $contactstatus,
                'choose_payment' => $choose_payment_status,
                'bank_account_id' => $bank_id,
                'screenshot_file' => '',
                "packages_id" => $package_id,
                "user_info_id" => $user_id,
                "end_date" => $end_date,
                "billing_cycle" => $BillingCycle,
                "order_price" => $order_price,
                "payment_status" => $payment_status,
            );

            $this->package_model->package_order_now($data);
            $this->response(array(
                "status" => 1,
                "message" => "Success",
            ), REST_Controller::HTTP_OK);

        }else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }



    }
    
    
    
    public function ordernowdemo_post()
    {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|webp|gif';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $file_name = $this->upload->data('file_name');
        }else{
            $file_name = '';
        }
        
        
        $contactstatus = $this->security->xss_clean($this->input->post("contactstatus"));
        $choose_payment_status = $this->security->xss_clean($this->input->post("choose_payment_status"));
        $BillingCycle = $this->security->xss_clean($this->input->post("BillingCycle"));
        $package_id = $this->security->xss_clean($this->input->post("package_id"));
        
        $bank_id = $this->security->xss_clean($this->input->post("bank_id"));

        $OneMonthlyPrice = $this->security->xss_clean($this->input->post("OneMonthlyPrice"));
        $ThreeMonthlyPrice = $this->security->xss_clean($this->input->post("ThreeMonthlyPrice"));
        $ThreeFullPrice = $this->security->xss_clean($this->input->post("ThreeFullPrice"));
        $SixMonthlyPrice = $this->security->xss_clean($this->input->post("SixMonthlyPrice"));
        $SixFullPrice = $this->security->xss_clean($this->input->post("SixFullPrice"));

        $user_id = $this->security->xss_clean($this->input->post("user_id"));

        if(!empty($contactstatus) && !empty($choose_payment_status) && !empty($BillingCycle) && !empty($user_id)){


            if ($BillingCycle == '1') {
                $end_date = date('Y-m-d', strtotime('+1 month'));
                $order_price = $OneMonthlyPrice;
                $BillingCycle = 1;
                $payment_status = 'Full Payment';
            } elseif ($BillingCycle == '3MonthsContractMonthlyPayment') {
                $end_date = date('Y-m-d', strtotime('+3 month'));
                $order_price = $ThreeMonthlyPrice;
                $BillingCycle = 3;
                $payment_status = 'Per Months';
            } elseif ($BillingCycle == '3MonthsFullPayment') {
                $end_date = date('Y-m-d', strtotime('+3 month'));
                $order_price = $ThreeFullPrice;
                $BillingCycle = 3;
                $payment_status = 'Full Payment';
            } elseif ($BillingCycle == '6MonthsContractMonthlyPayment') {
                $end_date = date('Y-m-d', strtotime('+6 month'));
                $order_price = $SixMonthlyPrice;
                $BillingCycle = 6;
                $payment_status = 'Per Months';
            } elseif ($BillingCycle == '6MonthsFullPayment') {
                $end_date = date('Y-m-d', strtotime('+6 month'));
                $order_price = $SixFullPrice;
                $BillingCycle = 6;
                $payment_status = 'Full Payment';
            }


            $data = array(
                'contact' => $contactstatus,
                'choose_payment' => $choose_payment_status,
                'bank_account_id' => $bank_id,
                'screenshot_file' => $file_name,
                "packages_id" => $package_id,
                "user_info_id" => $user_id,
                "end_date" => $end_date,
                "billing_cycle" => $BillingCycle,
                "order_price" => $order_price,
                "payment_status" => $payment_status,
            );

            $this->package_model->package_order_now($data);
            $this->response(array(
                "status" => 1,
                "message" => "Success",
            ), REST_Controller::HTTP_OK);

        }else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ) , REST_Controller::HTTP_NOT_FOUND);
        }
    }



}
