<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/category_model');
        $this->load->model('frontend/properties_list_model');
    }


	public function index($offset = 0)
	{
		$config = [
            'base_url' => base_url('category/index'),
            'total_rows' => $this->category_model->count_all(),
            'per_page' => 50,
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
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
        $data["properties"] = $this->category_model->get_category($config['per_page'], $offset);

        $data['main_title'] = 'for_sale';

        $this->load->view('propertylist/index', $data);
	}

    public function advance_search($reorder = NULL, $offset = 0)
    {
        $keyword = $this->input->get('keyword');
        
        $propertie_type = $this->input->get('propertie_type');
        $data['main_title'] = $propertie_type;


        $arr['reorder'] = $reorder;

        $config = [
            'base_url' => base_url('category/advance_search/'.$propertie_type.'/'.$reorder),
            'total_rows' => $this->category_model->count_all_advance_search($arr),
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
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();

        if (!empty($keyword)) {
            $data["properties"] = $this->category_model->search_by_id($config['per_page'], $offset);
        }else{
            $data["properties"] = $this->category_model->advance_search($arr, $config['per_page'], $offset);
        }
        // $this->load->view('category/index', $data);
        $this->load->view('propertylist/index', $data);
    }

}
