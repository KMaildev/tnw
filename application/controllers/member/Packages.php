<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if (empty($this->member_id)) {
            redirect(base_url('member/auth/login'));
        } elseif (empty($this->member_email)) {
            redirect(base_url('member/auth/login'));
        }

        $this->load->model('member/packages_model');
        $this->load->model('admin/bank_accounts_model');
    }


    public function index()
    {
        $data["all_packages"] = $this->packages_model->getAll();
        $this->load->view('member/packages/index', $data);
    }


    public function order_now($id)
    {
        $data["bank_accounts"] = $this->bank_accounts_model->get_bank_account();
        $data["package_data"] = $this->packages_model->find_package($id);
        $this->load->view('member/packages/order_now', $data);
    }


    public function order_confirm()
    {
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('choose_payment', 'Choose Payment', 'required');
        $this->form_validation->set_rules('package_id', 'Package ID', 'required');
        $this->form_validation->set_rules('BillingCycle', 'Billing Cycle', 'required');

        $oneMonthPrice = $this->input->post('oneMonthPrice');

        $threeMonthContract = $this->input->post('threeMonthContract');
        $threeMonthFull = $this->input->post('threeMonthFull');

        $sixMonthContract = $this->input->post('sixMonthContract');
        $sixMonthFull = $this->input->post('sixMonthFull');


        $BillingCycle = $this->input->post('BillingCycle');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: အချက်အလက်များ ဖြည့်သွင်းပါ');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $choose_payment = $this->input->post('choose_payment');

            if ($choose_payment == 'bank_transfer') {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('single_file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('danger', 'Error: Something wrong');
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $screenshot_file = $data['upload_data']['file_name'];
                }
                $data['screenshot_file'] = $screenshot_file ?? '';
                if ($BillingCycle == '1') {
                    $data['end_date'] = date('Y-m-d', strtotime('+1 month'));
                    $data['order_price'] = $oneMonthPrice;
                    $data['BillingCycle'] = 1;
                    $data['payment_status'] = 'Full Payment';
                } elseif ($BillingCycle == '3MonthsContractMonthlyPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+3 month'));
                    $data['order_price'] = $threeMonthContract;
                    $data['BillingCycle'] = 3;
                    $data['payment_status'] = 'Per Months';
                } elseif ($BillingCycle == '3MonthsFullPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+3 month'));
                    $data['order_price'] = $threeMonthFull;
                    $data['BillingCycle'] = 3;
                    $data['payment_status'] = 'Full Payment';
                } elseif ($BillingCycle == '6MonthsContractMonthlyPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+6 month'));
                    $data['order_price'] = $sixMonthContract;
                    $data['BillingCycle'] = 6;
                    $data['payment_status'] = 'Per Months';
                } elseif ($BillingCycle == '6MonthsFullPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+6 month'));
                    $data['order_price'] = $sixMonthFull;
                    $data['BillingCycle'] = 6;
                    $data['payment_status'] = 'Full Payment';
                }

                $data['member_id'] = $this->session->userdata('member_id');
                $this->packages_model->bank_transfer_save($data);
                $this->session->set_flashdata('success', 'Order Successfully');
                redirect($_SERVER['HTTP_REFERER']);
            } elseif ($choose_payment == 'contact_me') {

                if ($BillingCycle == '1') {
                    $data['end_date'] = date('Y-m-d', strtotime('+1 month'));
                    $data['order_price'] = $oneMonthPrice;
                    $data['BillingCycle'] = 1;
                    $data['payment_status'] = 'Full Payment';
                } elseif ($BillingCycle == '3MonthsContractMonthlyPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+3 month'));
                    $data['order_price'] = $threeMonthContract;
                    $data['BillingCycle'] = 3;
                    $data['payment_status'] = 'Per Months';
                } elseif ($BillingCycle == '3MonthsFullPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+3 month'));
                    $data['order_price'] = $threeMonthFull;
                    $data['BillingCycle'] = 3;
                    $data['payment_status'] = 'Full Payment';
                } elseif ($BillingCycle == '6MonthsContractMonthlyPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+6 month'));
                    $data['order_price'] = $sixMonthContract;
                    $data['BillingCycle'] = 6;
                    $data['payment_status'] = 'Per Months';
                } elseif ($BillingCycle == '6MonthsFullPayment') {
                    $data['end_date'] = date('Y-m-d', strtotime('+6 month'));
                    $data['order_price'] = $sixMonthFull;
                    $data['BillingCycle'] = 6;
                    $data['payment_status'] = 'Full Payment';
                }

                $data['member_id'] = $this->session->userdata('member_id');
                $this->packages_model->contact_me_save($data);
                $this->session->set_flashdata('success', 'Order Successfully');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function package_order_history()
    {
        $member_id = $this->session->userdata('member_id');
        $data["order_histories"] = $this->packages_model->package_order_history($member_id);
        $this->load->view('member/packages/package_order_history', $data);
    }
}
