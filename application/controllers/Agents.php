<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/agents_model');
        $this->load->model('counter_model');
        $this->load->model('frontend/properties_list_model');
    }

	public function index($offset = 0)
	{
		$config = [
            'base_url' => base_url('agents/index'),
            'total_rows' => $this->agents_model->count_all(),
            'per_page' => 20,
            'reuse_query_string' => TRUE,
            'full_tag_open' => '<ul class="pagination">',
            'full_tag_close' => '</ul>',
            'first_tag_open' => '<li class="page-item page-link">',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li class="page-item page-link">',
            'last_tag_close' => '</li>',
            'next_tag_open' => '<li class="page-item page-link">',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li class="page-item page-link">',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li class="page-item page-link">',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="page-item active"><a class="page-link">',
            'cur_tag_close' => '</a></li>',
        ];

        $this->pagination->initialize($config);
        $data["agents"] = $this->agents_model->getAll($config['per_page'], $offset);
        $data["property_counts"] = $this->counter_model->property_count();

        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
		$this->load->view('agents/index', $data);
	}

	public function detail($id)
	{

        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();

        
		$member_id = $id;
		$data['total_sale'] = $this->counter_model->count_total_sale($member_id);
		$data['total_rent'] = $this->counter_model->count_total_rent($member_id);
		$data['total_new_properties'] = $this->counter_model->count_total_new_properties($member_id);
        $data['count_total_soldout'] = $this->counter_model->count_total_soldout($member_id);
        

		$data["recent_for_sales"] = $this->agents_model->recent_for_sale($id);
		$data["recent_for_rents"] = $this->agents_model->recent_for_rent($id);
		$data["recent_for_new_properties"] = $this->agents_model->recent_for_new_properties($id);


		$data["detail"] = $this->agents_model->find_by_id($id);
        $data["packages_status"] = $this->agents_model->get_package($id);

		$this->load->view('agents/detail', $data);
	}
}
