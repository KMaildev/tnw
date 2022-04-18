<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soldout_status extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
            redirect(base_url('auth'));
        }
        $this->load->model('include/soldout_status_model');
    }

    public function soldout_status_soldout_now($id) {
        $this->soldout_status_model->soldout_status_change($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function soldout_status_un_soldout($id) {
        $this->soldout_status_model->soldout_status_un_soldout($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

}
