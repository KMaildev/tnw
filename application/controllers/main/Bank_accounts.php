<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_accounts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
            redirect(base_url('auth'));
        }

        $this->load->model('admin/bank_accounts_model');
    }

	
    public function index($offset=0)
    {
        $config = [
            'base_url' => base_url('main/bank_accounts/index'),
            'total_rows' => $this->bank_accounts_model->count_all(),
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
        $data["bank_accounts"] = $this->bank_accounts_model->getAll($config['per_page'], $offset);
        $this->load->view('admin/bank_accounts/index', $data);
    }

    public function create()
    {
        $this->load->view('admin/bank_accounts/create');
    }

    public function save() {
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('account_name', 'Account Name', 'required');
        $this->form_validation->set_rules('account_number', 'Account Number', 'required');

        if ($this->form_validation->run() === FALSE){ 
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->bank_accounts_model->save();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }

    public function edit($id)
    {
        $data["bank_account"] = $this->bank_accounts_model->find_by_id($id);
        $this->load->view('admin/bank_accounts/edit', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('account_name', 'Account Name', 'required');
        $this->form_validation->set_rules('account_number', 'Account Number', 'required');
        $this->form_validation->set_rules('bank_id', 'Bank ID', 'required');

        if ($this->form_validation->run() === FALSE){ 
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->bank_accounts_model->update();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function destroy($id)
    {
        $this->bank_accounts_model->destroy($id);
        redirect(site_url('main/bank_accounts/index'));
    }

}
