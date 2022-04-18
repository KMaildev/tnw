<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class By_owner extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
    }

    public function for_sale($offset = 0)
	{
		$arr['propertie_type'] = 'by_owner_for_sale';
		$config = [
            'base_url' => base_url('by_owner/for_sale'),
            'total_rows' => $this->properties_list_model->count_all($arr),
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
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();

        $data["properties"] = $this->properties_list_model->getAll($arr, $config['per_page'], $offset);
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();

		$this->load->view('by_owner/for_sale', $data);
	}

	public function for_rent($offset = 0)
	{
		$arr['propertie_type'] = 'by_owner_for_rent';
		$config = [
            'base_url' => base_url('by_owner/for_rent'),
            'total_rows' => $this->properties_list_model->count_all($arr),
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
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();

        $data["properties"] = $this->properties_list_model->getAll($arr, $config['per_page'], $offset);
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();

		$this->load->view('by_owner/for_rent', $data);
	}

}
