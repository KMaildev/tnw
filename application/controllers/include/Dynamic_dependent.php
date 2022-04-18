<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_dependent extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('include/dynamic_dependent_model');
	}

	function fetch_township()
	{
		if($this->input->post('region_id'))
		{
			echo $this->dynamic_dependent_model->fetch_township($this->input->post('region_id'));
		}
	}

	function fetch_township_member()
	{
		if($this->input->post('region_id'))
		{
			echo $this->dynamic_dependent_model->fetch_township_member($this->input->post('region_id'));
		}
	}

	function fetch_township_member_update()
	{
		if($this->input->post('region_id') && $this->input->post('township_id'))
		{
			echo $this->dynamic_dependent_model->fetch_township_member($this->input->post('region_id'), $this->input->post('township_id'));
		}
	}

	function frontend_fetch_township()
	{
		if($this->input->post('region_id'))
		{
			echo $this->dynamic_dependent_model->frontend_fetch_township($this->input->post('region_id'));
		}
	}



}
