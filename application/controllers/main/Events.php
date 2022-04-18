<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
        $this->load->model('admin/events_model');
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
		$this->load->view('admin/events/index', $data);
	}

    public function create()
    {
        $this->load->view('admin/events/create');
    }

    public function save() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('e_date', 'Date', 'required');
        $this->form_validation->set_rules('e_time', 'Time', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('description_eng', 'Description', 'required');
        $this->form_validation->set_rules('description_mm', 'Description Myanmar', 'required');

        $config['upload_path']          = './uploads/events/';
        $config['allowed_types']        = 'gif|jpg|png|wmv|mp4|avi|mov';
        $config['max_size']             = 50000;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('single_file'))
        {
            $error = array('error' => $this->upload->display_errors());
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $photo = $data['upload_data']['file_name'];
        }

        if ( ! $this->upload->do_upload('video'))
        {
            $error = array('error' => $this->upload->display_errors());
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $video_data = $data['upload_data']['file_name'];
        }

        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/events/create');
        }else{
            $data['photo'] = $photo ?? "";
            $data['video'] = $video_data ?? "";
            $this->events_model->save($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }


    public function detail($id)
    {
        $data["detail"] = $this->events_model->find_by_id($id);
        $this->load->view('admin/events/detail', $data);
    }


    public function edit($id)
    {
        $data["detail"] = $this->events_model->find_by_id($id);
        $this->load->view('admin/events/edit', $data);
    }

    public function update() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('e_date', 'Date', 'required');
        $this->form_validation->set_rules('e_time', 'Time', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('description_eng', 'Description', 'required');
        $this->form_validation->set_rules('description_mm', 'Description Myanmar', 'required');
        $this->form_validation->set_rules('e_id', 'ID', 'required');

        $video_value =  $this->input->post('video_value');
        $single_file_value =  $this->input->post('single_file_value');


        $config['upload_path']          = './uploads/events/';
        $config['allowed_types']        = 'gif|jpg|png|wmv|mp4|avi|mov';
        $config['max_size']             = 50000;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('single_file'))
        {
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            $photo = $data['upload_data']['file_name'];
        }

        if ( ! $this->upload->do_upload('video'))
        {
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            $video_data = $data['upload_data']['file_name'];
        }

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Something wrong');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $data['photo'] = $photo ?? $single_file_value;
            $data['video'] = $video_data ?? $video_value;
            $this->events_model->update($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }


    }

    public function destroy($id)
    {
        $this->events_model->destroy($id);
        redirect(base_url('main/events/index'));
    }


}
