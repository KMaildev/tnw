<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

	public function set_language() {
		$this->session->set_userdata('lang', 'myanmar');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function unset_language() {
		unset($_SESSION['lang']);
		redirect($_SERVER['HTTP_REFERER']);
	}

}
