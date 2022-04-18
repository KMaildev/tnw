<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Propertylist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/properties_list_model');
    }


    public function index($propertie_type = NULL, $offset = 0)
    {
        $reorder = $this->input->get('reorder');
        $arr['reorder'] = $reorder;

        $type = $this->input->get('propertie_type');
        $propertie_type =  $type == '' ? $propertie_type : $type;
        $arr['propertie_type'] = $propertie_type;

        $config = [
            'base_url' => base_url('propertylist/index/' . $propertie_type . '/' . $reorder),
            'total_rows' => $this->properties_list_model->count_all($arr),
            'per_page' => 30,
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

        $data['main_title'] = $propertie_type;
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();
        $data["properties"] = $this->properties_list_model->getAll($arr, $config['per_page'], $offset);
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
        $this->load->view('propertylist/index', $data);
    }


    public function find_property($propertie_type = NULL, $offset = 0)
    {
        $reorder = $this->input->get('reorder');
        $arr['reorder'] = $reorder;

        $type = $this->input->get('propertie_type');
        $propertie_type =  $type == '' ? $propertie_type : $type;
        $arr['propertie_type'] = $propertie_type;

        $config = [
            'base_url' => base_url('propertylist/find_property/' . $propertie_type . '/' . $reorder),
            'total_rows' => $this->properties_list_model->count_all_find_property($arr),
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

        $data['main_title'] = $propertie_type;
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
        $data["data_regions"] = $this->properties_list_model->get_regions();
        $data["properties"] = $this->properties_list_model->findPropertygetAll($arr, $config['per_page'], $offset);
        $data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
        $this->load->view('propertylist/index', $data);
    }
}
