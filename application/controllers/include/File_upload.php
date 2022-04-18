<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->member_id = $this->session->userdata('member_id');
        $this->member_email = $this->session->userdata('email');

        if(empty($this->member_id)){
            redirect(base_url('member/auth/login'));
        }elseif (empty($this->member_email)){
            redirect(base_url('member/auth/login'));
        }
        $this->load->library('image_lib');
        $this->load->model('member/dashboard_model');
    }

    function process_upload(){
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('userfile')){
            $token = $this->input->post('token_foto');
            $nama = $this->upload->data('file_name');

            $data = array('upload_data' => $this->upload->data());
            $full_path = $data['upload_data']['full_path'];
            $this->overlayWatermark($full_path);
        }
        $this->db->insert('propertie_photo', array('photo'=>$nama,'properties_id'=>$token));
    }

    public function overlayWatermark($source_image)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_image;
        $config['wm_type'] = 'overlay';
        $config['wm_overlay_path'] = 'uploads/watermark/watermark.png'; //the overlay image
        $config['wm_opacity'] = 50;
        $config['wm_vrt_alignment'] = 'bottom';
        $config['wm_hor_alignment'] = 'center';
        $this->image_lib->initialize($config);
        if (!$this->image_lib->watermark()) {
            echo $this->image_lib->display_errors();
        }
    }


    function remove_photo(){
        $token = $this->input->post('token');
        $foto = $this->db->get_where('propertie_photo',array('properties_id'=>$token));
        if($foto->num_rows()>0){
            $hasil = $foto->row();
            $nama_foto = $hasil->photo;
            if(file_exists($file='./uploads/'.$nama_foto)){
                unlink($file);
            }
            $this->db->delete('propertie_photo',array('properties_id'=>$token));
        }
        echo "{}";
    }

}
