<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tnw_cloud extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->admin_id = $this->session->userdata('admin_id');

        if(empty($this->admin_id)){
    		redirect(base_url('auth'));
   		}
        
        $this->load->model('admin/tnw_cloud_model');
    }

	public function index($offset = 0)
	{
        $config = [
            'base_url' => base_url('main/tnw_cloud/index'),
            'total_rows' => $this->tnw_cloud_model->count_all(),
            'per_page' => 100,
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
        $data["folders"] = $this->tnw_cloud_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->tnw_cloud_model->count_all();
        $this->load->view('admin/tnw_cloud/index', $data);
	}

    public function create_folder()
    {
        $this->form_validation->set_rules('folder_name', 'Folder Name', 'required|min_length[1]|max_length[10]');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/tnw_cloud/index');
        }else{
            $this->tnw_cloud_model->insert();
            $this->session->set_flashdata('success', 'Successfully');
            redirect('main/tnw_cloud');
        }
    }

    public function my_data($id)
    {
        $data['my_data_detail'] = $this->tnw_cloud_model->my_data_detail($id);
        $data['my_photos'] = $this->tnw_cloud_model->my_data_get_photo($id);
        $this->load->view('admin/tnw_cloud/my_data', $data);
    }

    public function data_upload($id)
    {
        $data["insert_id"] = $id;
        $data['my_data_detail'] = $this->tnw_cloud_model->my_data_detail($id);
        $this->load->view('admin/tnw_cloud/data_upload', $data);
    }

    function process_upload(){
        $config['upload_path']   = './uploads/tnw_cloud_photo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
         $config['max_size']     = 10000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('userfile')){
            $folder_id = $this->input->post('folder_id');
            $file_name = $this->upload->data('file_name');
            $created_date = date("Y-m-d");
            $upload_date = date("F j, Y");
        }

        $this->db->insert('tnw_cloud_photo', array('photo'=>$file_name, 'folders_id'=>$folder_id, 'created_date'=>$created_date, 'upload_date'=>$upload_date));
    }

    function remove_photo(){
        $token = $this->input->post('token');
        $foto = $this->db->get_where('tnw_cloud_photo',array('folders_id'=>$token));
        if($foto->num_rows()>0){
            $hasil = $foto->row();
            $nama_foto = $hasil->photo;
            if(file_exists($file='./uploads/tnw_cloud_photo/'.$nama_foto)){
                unlink($file);
            }
            $this->db->delete('tnw_cloud_photo',array('folders_id'=>$token));
        }
        echo "{}";
    }

    public function destroy_photo($id)
    {
        $this->tnw_cloud_model->destroy_photo($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function destroy_folder_photo($id)
    {
        $this->tnw_cloud_model->destroy_folder_photo($id);
        $this->tnw_cloud_model->destroy_all_photo($id);
        redirect('main/tnw_cloud');
    }

}
