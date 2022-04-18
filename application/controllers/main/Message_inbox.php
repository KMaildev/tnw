<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message_inbox extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }
        $this->load->model('admin/message_inbox_model');
    }

    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/message_inbox/index'),
            'total_rows' => $this->message_inbox_model->count_all(),
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
        $data["messages"] = $this->message_inbox_model->get_member_messages($config['per_page'], $offset);
        $data["count_all"] = $this->message_inbox_model->count_all();
        $this->message_inbox_model->update_read_message();
        $this->load->view('admin/message_inbox/index', $data);
    }


    public function index_view()
    {
        $this->load->view('admin/message_inbox/message_ajax');
    }

    public function load_unseen_notification()
    {
        $this->message_inbox_model->ajax_call_count();
        $data = $this->message_inbox_model->load_unseen_notification();
        echo json_encode($data);
    }

    function update_read_message()
    {
        $mm_id = $this->input->post('mm_id');
        $data = $this->message_inbox_model->update_read_message($mm_id);
        echo json_encode($data);
    }


    public function destroy($id)
    {
        $this->message_inbox_model->destroy($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
