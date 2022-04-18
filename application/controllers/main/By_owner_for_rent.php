<?php
defined('BASEPATH') or exit('No direct script access allowed');

class By_owner_for_rent extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');
        $this->load->library('image_lib');
        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }

        $this->load->model('admin/property_type_model');
        $this->load->model('admin/region_model');
        $this->load->model('admin/townships_model');
        $this->load->model('admin/by_owner_for_rent_model');
        $this->load->model('admin/company_model');
        $this->load->model('admin/developers_model');
    }

    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/by_owner_for_rent/index'),
            'total_rows' => $this->by_owner_for_rent_model->count_all(),
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
        $data["for_sales"] = $this->by_owner_for_rent_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->by_owner_for_rent_model->count_all();
        $this->load->view('admin/by_owner_for_rent/index', $data);
    }

    public function create()
    {
        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();
        $data["count_all"] = $this->by_owner_for_rent_model->count_all();
        $data["members"] = $this->developers_model->getAllMember();
        $data['type'] = 'by_owner_for_rent';
        $this->load->view('admin/by_owner_for_rent/create', $data);
    }

    public function save()
    {
        $data['title_eng'] = $this->input->post('title_eng');
        $data['title_mm'] = $this->input->post('title_mm');
        $data['region_id'] = $this->input->post('region_id');
        $data['township_id'] = $this->input->post('township_id');
        $data['property_type'] = $this->input->post('property_type');
        $data['floor'] = $this->input->post('floor');
        $data['area'] = $this->input->post('area');
        $data['area_type'] = $this->input->post('area_type');
        $data['price'] = $this->input->post('price');
        $data['price_type'] = $this->input->post('price_type');
        $data['installment'] = $this->input->post('installment');
        $data['property_status'] = $this->input->post('property_status');
        $data['rooms'] = $this->input->post('rooms');
        $data['bathroom'] = $this->input->post('bathroom');
        $data['dining_room'] = $this->input->post('dining_room');
        $data['living_room'] = $this->input->post('living_room');
        $data['bead_room'] = $this->input->post('bead_room');
        $data['other_room'] = $this->input->post('other_room');
        $data['shrine_room'] = $this->input->post('shrine_room');
        $data['year_built'] = $this->input->post('year_built');
        $data['swimming_pool'] = $this->input->post('swimming_pool');
        $data['securit'] = $this->input->post('securit');
        $data['air_conditioning'] = $this->input->post('air_conditioning');
        $data['wifi'] = $this->input->post('wifi');
        $data['balcony'] = $this->input->post('balcony');
        $data['cctv'] = $this->input->post('cctv');
        $data['car_parking'] = $this->input->post('car_parking');
        $data['dishwasher'] = $this->input->post('dishwasher');
        $data['generator'] = $this->input->post('generator');
        $data['near_church'] = $this->input->post('near_church');
        $data['garden'] = $this->input->post('garden');
        $data['gym'] = $this->input->post('gym');
        $data['lift'] = $this->input->post('lift');
        $data['play_ground'] = $this->input->post('play_ground');
        $data['water_heater'] = $this->input->post('water_heater');
        $data['mountain_view'] = $this->input->post('mountain_view');
        $data['pagoda_view'] = $this->input->post('pagoda_view');
        $data['sea_view'] = $this->input->post('sea_view');
        $data['lake_view'] = $this->input->post('lake_view');
        $data['city_view'] = $this->input->post('city_view');
        $data['garden_view'] = $this->input->post('garden_view');
        $data['river_view'] = $this->input->post('river_view');
        $data['showroom'] = $this->input->post('showroom');
        $data['restaurant'] = $this->input->post('restaurant');
        $data['office'] = $this->input->post('office');
        $data['warehouse'] = $this->input->post('warehouse');
        $data['description_mm'] = $this->input->post('description_mm');
        $data['description_eng'] = $this->input->post('description_eng');
        $data['status'] = 1;

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|wmv|mp4|avi|mov';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $plans_photo = $data['upload_data']['file_name'];
        }

        if (!$this->upload->do_upload('video')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $video_data = $data['upload_data']['file_name'];
        }

        $education_field = $this->input->post('education');
        if ($education_field == '') {
            $data['education'] = NULL;
        } else {
            $total = count($education_field);
            $education = [];
            for ($i = 0; $i < $total; $i++) {
                $education[] = $education_field[$i];
            }
            $data['education'] = json_encode($education);
        }


        $health_field = $this->input->post('health');
        if ($health_field == '') {
            $data['health'] = NULL;
        } else {
            $total = count($health_field);
            $health = [];
            for ($i = 0; $i < $total; $i++) {
                $health[] = $health_field[$i];
            }
            $data['health'] = json_encode($health);
        }


        $transportation_field = $this->input->post('transportation');
        if ($transportation_field == '') {
            $data['transportation'] = NULL;
        } else {
            $total = count($transportation_field);
            $transportation = [];
            for ($i = 0; $i < $total; $i++) {
                $transportation[] = $transportation_field[$i];
            }
            $data['transportation'] = json_encode($transportation);
        }

        $this->form_validation->set_rules('title_mm', 'Title', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');
        $this->form_validation->set_rules('township_id', 'Township', 'required');
        $this->form_validation->set_rules('property_type', 'Property Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data["property_types"] = $this->property_type_model->getAll();
            $data["regions"] = $this->region_model->getAll();
            $data["townships"] = $this->townships_model->getAll();
            $data["count_all"] = $this->by_owner_for_rent_model->count_all();
            $this->load->view('admin/by_owner_for_rent/create', $data);
        } else {
            $data['plans_photo'] = $plans_photo ?? "";
            $data['video'] = $video_data ?? "";
            $data["insert_id"] =  $this->by_owner_for_rent_model->insert($data);
            $this->session->set_flashdata('success', 'Added Successfully');
            $this->load->view('admin/by_owner_for_rent/upload_file', $data);
        }
    }

    public function detail($id)
    {
        $data["detail"] = $this->by_owner_for_rent_model->getDataById($id);
        $data["photos"] = $this->by_owner_for_rent_model->getDataByPhoto($id);
        $data["company_data"] = $this->company_model->get_by_company_data();
        $this->load->view('admin/by_owner_for_rent/detail', $data);
    }

    public function destroy($id)
    {
        $this->by_owner_for_rent_model->destroy_properties($id);
        $this->by_owner_for_rent_model->destroy_propertie_photo($id);
        redirect(base_url('main/for_sale'));
    }

    public function edit($id)
    {
        $data["property_types"] = $this->property_type_model->getAll();
        $data["regions"] = $this->region_model->getAll();
        $data["townships"] = $this->townships_model->getAll();
        $data["count_all"] = $this->by_owner_for_rent_model->count_all();

        $data["detail"] = $this->by_owner_for_rent_model->getDataById($id);
        $this->load->view('admin/by_owner_for_rent/edit', $data);
    }

    public function update()
    {
        $data['title_eng'] = $this->input->post('title_eng');
        $data['title_mm'] = $this->input->post('title_mm');
        $data['region_id'] = $this->input->post('region_id');
        $data['township_id'] = $this->input->post('township_id');
        $data['property_type'] = $this->input->post('property_type');
        $data['floor'] = $this->input->post('floor');
        $data['area'] = $this->input->post('area');
        $data['area_type'] = $this->input->post('area_type');
        $data['price'] = $this->input->post('price');
        $data['price_type'] = $this->input->post('price_type');
        $data['installment'] = $this->input->post('installment');
        $data['property_status'] = $this->input->post('property_status');
        $data['rooms'] = $this->input->post('rooms');
        $data['bathroom'] = $this->input->post('bathroom');
        $data['dining_room'] = $this->input->post('dining_room');
        $data['living_room'] = $this->input->post('living_room');
        $data['bead_room'] = $this->input->post('bead_room');
        $data['other_room'] = $this->input->post('other_room');
        $data['shrine_room'] = $this->input->post('shrine_room');
        $data['year_built'] = $this->input->post('year_built');
        $data['swimming_pool'] = $this->input->post('swimming_pool');
        $data['securit'] = $this->input->post('securit');
        $data['air_conditioning'] = $this->input->post('air_conditioning');
        $data['wifi'] = $this->input->post('wifi');
        $data['balcony'] = $this->input->post('balcony');
        $data['cctv'] = $this->input->post('cctv');
        $data['car_parking'] = $this->input->post('car_parking');
        $data['dishwasher'] = $this->input->post('dishwasher');
        $data['generator'] = $this->input->post('generator');
        $data['near_church'] = $this->input->post('near_church');
        $data['garden'] = $this->input->post('garden');
        $data['gym'] = $this->input->post('gym');
        $data['lift'] = $this->input->post('lift');
        $data['play_ground'] = $this->input->post('play_ground');
        $data['water_heater'] = $this->input->post('water_heater');
        $data['mountain_view'] = $this->input->post('mountain_view');
        $data['pagoda_view'] = $this->input->post('pagoda_view');
        $data['sea_view'] = $this->input->post('sea_view');
        $data['lake_view'] = $this->input->post('lake_view');
        $data['city_view'] = $this->input->post('city_view');
        $data['garden_view'] = $this->input->post('garden_view');
        $data['river_view'] = $this->input->post('river_view');
        $data['showroom'] = $this->input->post('showroom');
        $data['restaurant'] = $this->input->post('restaurant');
        $data['office'] = $this->input->post('office');
        $data['warehouse'] = $this->input->post('warehouse');
        $data['description_mm'] = $this->input->post('description_mm');
        $data['description_eng'] = $this->input->post('description_eng');
        $data['status'] = 1;
        $data['propertie_id'] = $this->input->post('propertie_id');
        $video_value =  $this->input->post('video_value');
        $single_file_value =  $this->input->post('single_file_value');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|wmv|mp4|avi|mov';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $plans_photo = $data['upload_data']['file_name'];
        }

        if (!$this->upload->do_upload('video')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $video_data = $data['upload_data']['file_name'];
        }


        $education_field = $this->input->post('education');
        if ($education_field == '') {
            $data['education'] = NULL;
        } else {
            $total = count($education_field);
            $education = [];
            for ($i = 0; $i < $total; $i++) {
                $education[] = $education_field[$i];
            }
            $data['education'] = json_encode($education);
        }


        $health_field = $this->input->post('health');
        if ($health_field == '') {
            $data['health'] = NULL;
        } else {
            $total = count($health_field);
            $health = [];
            for ($i = 0; $i < $total; $i++) {
                $health[] = $health_field[$i];
            }
            $data['health'] = json_encode($health);
        }


        $transportation_field = $this->input->post('transportation');
        if ($transportation_field == '') {
            $data['transportation'] = NULL;
        } else {
            $total = count($transportation_field);
            $transportation = [];
            for ($i = 0; $i < $total; $i++) {
                $transportation[] = $transportation_field[$i];
            }
            $data['transportation'] = json_encode($transportation);
        }


        $this->form_validation->set_rules('title_eng', 'Title', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');
        $this->form_validation->set_rules('township_id', 'Township', 'required');
        $this->form_validation->set_rules('property_type', 'Property Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('propertie_id', 'Propertie ID', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Fill all fields');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data['plans_photo'] = $plans_photo ?? $single_file_value;
            $data['video'] = $video_data ?? $video_value;
            $this->by_owner_for_rent_model->update($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function photo_edit($id)
    {
        $data["photos"] = $this->by_owner_for_rent_model->getDataByPhoto($id);
        $data['insert_id'] = $id;
        $this->load->view('admin/by_owner_for_rent/photo_edit', $data);
    }


    public function photo_remove($id)
    {
        $this->by_owner_for_rent_model->photo_remove($id);
        redirect($_SERVER['HTTP_REFERER']);
    }


    function process_upload()
    {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userfile')) {
            $token = $this->input->post('token_foto');
            $nama = $this->upload->data('file_name');

            $data = array('upload_data' => $this->upload->data());
            $full_path = $data['upload_data']['full_path'];
            $this->overlayWatermark($full_path);
        }
        $this->db->insert('propertie_photo', array('photo' => $nama, 'properties_id' => $token));
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


    function remove_photo()
    {
        $token = $this->input->post('token');
        $foto = $this->db->get_where('propertie_photo', array('properties_id' => $token));
        if ($foto->num_rows() > 0) {
            $hasil = $foto->row();
            $nama_foto = $hasil->photo;
            if (file_exists($file = './uploads/' . $nama_foto)) {
                unlink($file);
            }
            $this->db->delete('propertie_photo', array('properties_id' => $token));
        }
        echo "{}";
    }


    public function changeStatusActive($id)
    {
        $this->by_owner_for_rent_model->changeStatusActive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusInactive($id)
    {
        $this->by_owner_for_rent_model->changeStatusInactive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
