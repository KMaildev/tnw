<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonials extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if (empty($this->member_id)) {
            redirect(base_url('member/auth/login'));
        } elseif (empty($this->member_email)) {
            redirect(base_url('member/auth/login'));
        }

        $this->load->model('admin/testimonials_model');
        $this->load->model('admin/region_model');
    }


    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('member/testimonials/index'),
            'total_rows' => $this->testimonials_model->count_all(),
            'per_page' => 5,
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
        $data["testimonials"] = $this->testimonials_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->testimonials_model->count_all();
        $data["regions"] = $this->region_model->getAll();
        $this->load->view('member/testimonials/index', $data);
    }


    public function save()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $photo = $data['upload_data']['file_name'];
        }

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');
        $this->form_validation->set_rules('testimonial', 'Testimonial', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data['photo'] = $photo ?? "";
            $data['member_id'] = $this->session->userdata('member_id');
            $this->testimonials_model->save_member_testimonials($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function update()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $photo = $data['upload_data']['file_name'];
        }


        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');
        $this->form_validation->set_rules('testimonial', 'Testimonial', 'required');
        $this->form_validation->set_rules('t_id', 'ID', 'required');

        if (empty($_FILES['single_file']['name'])) {
            $data['photo'] = $this->input->post('photo_value');
            $this->testimonials_model->update_member_testimonials($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('error', 'Something wrong');
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $data['photo'] = $photo ?? "";
                $this->testimonials_model->update_member_testimonials($data);
                $this->session->set_flashdata('success', 'Successfully');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }


    public function destroy($id)
    {
        $memberID = $this->member_id;
        $this->testimonials_model->destroy_member_testimonials($id, $memberID);
        $this->session->set_flashdata('success', 'Deleted');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
