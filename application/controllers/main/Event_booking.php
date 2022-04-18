<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_booking extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
        $this->load->model('admin/event_booking_model');
    }

	public function index($offset = 0)
	{
        $config = [
            'base_url' => base_url('main/event_booking/index'),
            'total_rows' => $this->event_booking_model->count_all(),
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
        $data["event_bookings"] = $this->event_booking_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->event_booking_model->count_all();
		$this->load->view('admin/event_booking/index', $data);
	}


    public function destroy($id)
    {
        $this->event_booking_model->destroy($id);
        redirect(base_url('main/event_booking/index'));
    }


}
