<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {


    public function index()
    {
        $this->load->view('privacy/index');
    }

    public function Terms() {
        $this->load->view('privacy/terms');
    }


}
