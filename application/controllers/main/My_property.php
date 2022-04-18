<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_property extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');
        $this->load->library('image_lib');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }

        $this->load->model('admin/property_type_model');
        $this->load->model('admin/region_model');
        $this->load->model('admin/townships_model');
        $this->load->model('admin/for_sale_model');
        $this->load->model('admin/company_model');
        $this->load->model('admin/shared/property_list_model');
        $this->load->model('admin/developers_model');
    }

    public function index($propertyType, $offset = 0)
    {
        $config = [
            'base_url' => base_url('main/my_property/index/' . $propertyType),
            'total_rows' => $this->property_list_model->count_all($propertyType),
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
        $data["for_sales"] = $this->property_list_model->getAll($propertyType, $config['per_page'], $offset);
        $data["count_all"] = $this->property_list_model->count_all($propertyType);
        $data['title'] = $propertyType;
        $this->load->view('admin/my_property/index', $data);
    }


    public function hostel_create()
    {
        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();
        $data["count_all"] = $this->property_list_model->count_all('hostel');
        $data["members"] = $this->developers_model->getAllMember();
        $data['type'] = 'hostel';
        $this->load->view('admin/my_property/hostel_create', $data);
    }
}
