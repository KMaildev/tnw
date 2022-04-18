<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favoritesadd extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        $this->load->model('frontend/favoritesadd_model');
    }


    public function index($id) {
        $member_id = $this->session->userdata('member_id');
        $this->favoritesadd_model->add_favorites_update($id, $member_id);
        $this->session->set_flashdata('success', ' Added to your favourite list. You can see it under My Favorites in dashboard.');
        redirect($_SERVER['HTTP_REFERER']);
    }



    public function favorites() {
        $this->session->set_flashdata('danger', ' အနှစ်သက်ဆုံးစာရင်းသို့ ထည့်ရန်အတွက် သင်၏အကောင့်ထဲသို့ ဝင်ရောက်ရန်လိုအပ်ပါသည်။');
        redirect($_SERVER['HTTP_REFERER']);
    }

}