<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_app extends CI_Controller {

	public function index()
	{
		$this->load->view('mobile_app/index');
	}
	
	public function android()
	{
		$this->load->view('mobile_app/android');
	}
	
	public function ios()
	{
		$this->load->view('mobile_app/iso');
	}
	
}