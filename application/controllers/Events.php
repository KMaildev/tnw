<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/events_model');
        $this->load->model('frontend/properties_list_model');
        $this->load->model('frontend/events_book_model');
    }

    public function index($offset=0)
	{
        $config = [
            'base_url' => base_url('main/events/index'),
            'total_rows' => $this->events_model->count_all(),
            'per_page' => 40,
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
        $data["events"] = $this->events_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->events_model->count_all();
        $data["data_property_types"] = $this->properties_list_model->get_property_type();
		$this->load->view('events/index', $data);
	}


	public function detail($id)
	{
		$data["detail"] = $this->events_model->find_by_id($id);
		$data["tatnaywon"] = $this->properties_list_model->tatnaywon_company();
		$this->load->view('events/detail', $data);
	}

	public function event_book_now() {
        $this->form_validation->set_rules('event_id', 'ID', 'required');
        $this->form_validation->set_rules('name', 'Date', 'required');
        $this->form_validation->set_rules('phone', 'Time', 'required');
        $this->form_validation->set_rules('email', 'Location', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Ssomething wrong');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->events_book_model->event_book_now();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

	public function book_now()
	{
		$this->load->view('events/book_now');
	}
}
