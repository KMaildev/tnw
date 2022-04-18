<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
        $this->load->model('admin/careers_model');
    }

	public function index($offset=0)
	{
        $config = [
            'base_url' => base_url('main/careers/index'),
            'total_rows' => $this->careers_model->count_all(),
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
        $data["careers"] = $this->careers_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->careers_model->count_all();
		$this->load->view('admin/careers/index', $data);
	}

    public function create()
    {
        $this->load->view('admin/careers/create');
    }

    public function save() {

        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('experience_level', 'Experience Level', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required');
        $this->form_validation->set_rules('job_location', 'Job Location', 'required');
        $this->form_validation->set_rules('job_description', 'Job Description', 'required');
        $this->form_validation->set_rules('job_requirements', 'Job Requirements', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/careers/create');
        }else{
            $this->careers_model->save();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }


    public function detail($id)
    {
        $data["detail"] = $this->careers_model->find_by_id($id);
        $this->load->view('admin/careers/detail', $data);
    }


    public function edit($id)
    {
        $data["detail"] = $this->careers_model->find_by_id($id);
        $this->load->view('admin/careers/edit', $data);
    }

    public function update() {
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('experience_level', 'Experience Level', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required');
        $this->form_validation->set_rules('job_location', 'Job Location', 'required');
        $this->form_validation->set_rules('job_description', 'Job Description', 'required');
        $this->form_validation->set_rules('job_requirements', 'Job Requirements', 'required');
        $this->form_validation->set_rules('c_id', 'ID', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('danger', 'Something wrong');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->careers_model->update();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function destroy($id)
    {
        $this->careers_model->destroy($id);
        redirect(base_url('main/careers/index'));
    }


}
