<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tnw_video_channel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('frontend/tnw_video_channel_model');
    }

	public function index($offset = 0)
	{
        $config = [
            'base_url' => base_url('tnw_video_channel/index'),
            'total_rows' => $this->tnw_video_channel_model->count_all(),
            'per_page' => 9,
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
        $data["videos"] = $this->tnw_video_channel_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->tnw_video_channel_model->count_all();
        $this->load->view('tnw_video_channel/index', $data);
	}

    public function show($id)
    {
        $data["detail"] = $this->tnw_video_channel_model->find_by_id($id);
        $data["videos"] = $this->tnw_video_channel_model->recent_video();
        $this->load->view('tnw_video_channel/show', $data);
    }

}
