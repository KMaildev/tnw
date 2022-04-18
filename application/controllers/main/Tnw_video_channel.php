<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tnw_video_channel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
        
        $this->load->model('admin/tnw_video_channel_model');
    }

	public function index($offset = 0)
	{
        $config = [
            'base_url' => base_url('main/tnw_video_channel/index'),
            'total_rows' => $this->tnw_video_channel_model->count_all(),
            'per_page' => 10,
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
        $this->load->view('admin/tnw_video_channel/index', $data);
	}

    public function create()
    {
        $this->load->view('admin/tnw_video_channel/create');
    }

    public function save() {

        ini_set( 'memory_limit', '5000M' );
        ini_set('upload_max_filesize', '5000M');  
        ini_set('post_max_size', '5000M');  
        ini_set('max_input_time', 3600);  
        ini_set('max_execution_time', 3600);

        $config['upload_path']          = './uploads/video_channel/';
        $config['allowed_types']        = 'wmv|mp4|avi|mov';
        $config['max_size']             = 902400000;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('single_file'))
        {
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            $video = $data['upload_data']['file_name'];
        }

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('admin_id', 'Admin', 'required');
        if (empty($_FILES['single_file']['name']))
        {
            $this->form_validation->set_rules('single_file', 'Video', 'required');
        }

        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/tnw_video_channel/create');
        }else{
            $data['video'] = $video;
            $this->tnw_video_channel_model->save($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function show($id)
    {
        $data["detail"] = $this->tnw_video_channel_model->find_by_id($id);
        $this->load->view('admin/tnw_video_channel/show', $data);
    }

    public function destroy_video($id)
    {
        $this->tnw_video_channel_model->destroy_video($id);
        redirect(base_url('main/tnw_video_channel'));
    }


}
