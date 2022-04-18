<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_guide extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
        $this->load->model('frontend/property_guide_model');
    }

    public function index($offset = 0)
	{
		$config = [
            'base_url' => base_url('property_guide/index'),
            'total_rows' => $this->property_guide_model->count_all(),
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
        $data["propertie_guides"] = $this->property_guide_model->getAll($config['per_page'], $offset);
		$this->load->view('property_guide/index', $data);
	}


	public function show($id)
	{
		$data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();
		$data["detail"] = $this->property_guide_model->find_by_id($id);
		$data["recent_guides"] = $this->property_guide_model->recent_guide($id);

		$this->load->view('property_guide/detail', $data);
	}
}
