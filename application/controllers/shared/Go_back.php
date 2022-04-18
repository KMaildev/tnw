<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Go_back extends CI_Controller {

	public function index()
	{
		echo "<script>window.history.go(-2);</script>";
	}
	
}
