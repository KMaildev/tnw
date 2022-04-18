<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latest_news extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
      $this->load->model('admin/latest_news_model');
      $this->load->model('admin/news_category');
    }

	public function index($offset=0)
	{
        $config = [
            'base_url' => base_url('main/latest_news/index'),
            'total_rows' => $this->latest_news_model->count_all(),
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
        $data["property_guides"] = $this->latest_news_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->latest_news_model->count_all();
		    $this->load->view('admin/latest_news/index', $data);
	}

    public function create()
    {
        $data["news_category"] = $this->news_category->getAll();
        $this->load->view('admin/latest_news/create', $data);
    }

    public function save() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|wmv|mp4|avi|mov';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('single_file'))
        {
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            $photo = $data['upload_data']['file_name'];
        }

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('admin_id', 'Admin', 'required');
        if (empty($_FILES['single_file']['name']))
        {
            $this->form_validation->set_rules('single_file', 'Photo', 'required');
        }

        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/latest_news/create');
        }else{
            $data['photo'] = $photo;
            $this->latest_news_model->save($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }



    public function detail($id)
    {
        $data["detail"] = $this->latest_news_model->find_by_id($id);
        $this->load->view('admin/latest_news/detail', $data);
    }


    public function edit($id)
    {
        $data["news_category"] = $this->news_category->getAll();
        $data["detail"] = $this->latest_news_model->find_by_id($id);
        $this->load->view('admin/latest_news/edit', $data);
    }

    public function update() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|wmv|mp4|avi|mov';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('single_file'))
        {
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            $photo = $data['upload_data']['file_name'];
        }

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('admin_id', 'Admin', 'required');
        if (empty($_FILES['single_file']['name']))
        {
            // $this->form_validation->set_rules('single_file', 'Photo', 'required');
            $data['photo'] = $this->input->post('photo_value');
            $this->latest_news_model->update($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }else {
            if ($this->form_validation->run() === FALSE){
              $this->session->set_flashdata('error', 'Something wrong');
              redirect($_SERVER['HTTP_REFERER']);
            }else{
                $data['photo'] = $photo;
                $this->latest_news_model->update($data);
                $this->session->set_flashdata('success', 'Successfully');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }



    }

    public function destroy($id)
    {
        $this->latest_news_model->destroy($id);
        redirect(base_url('main/latest_news/index'));
    }


    public function changeStatusActive($id) {
        $this->latest_news_model->changeStatusActive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusInactive($id) {
        $this->latest_news_model->changeStatusInactive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

}
