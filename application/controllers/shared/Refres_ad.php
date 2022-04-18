<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Refres_ad extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('include/refres_ad_model');
    }

    public function index($property_id, $user_id)
    {
        $update_refreshad = $this->refres_ad_model->update_refreshad($property_id);
        $save_refresh_ad_counter = $this->refres_ad_model->save_refresh_ad_counter($property_id, $user_id);
        if ($update_refreshad) {
            $this->session->set_flashdata('success', 'Refresh AD Process Completed.');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function refresh_limited()
    {
        $this->session->set_flashdata('success', 'နေ့စဉ် Refresh ပြုလုပ်နိုင်သည့်အရေအတွက် ပြည့်သွားပါပြီ');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
