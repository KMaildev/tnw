<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Property extends REST_Controller
{

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        parent::__construct();
        $this->load->library('image_lib');
        $this->load->helper("security");
        $this->load->model('api/property_model');
        $this->load->model('admin/shared/property_count_model');
    }


    public function index_get($propertyType, $offset = 0)
    {
        $config = [
            'total_rows' => $this->property_model->count_all($propertyType),
            'per_page' => 20,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->property_model->getAll($propertyType, $config['per_page'], $offset);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if (count($property_list) > 0) {
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }




    public function myproperty_get($propertyType, $userId, $offset = 0)
    {
        $config = [
            'total_rows' => $this->property_model->count_all($propertyType),
            'per_page' => 15,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->property_model->find_by_userId($propertyType, $userId, $config['per_page'], $offset);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if (count($property_list) > 0) {
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



    public function fetchsoleout_get($propertyType, $userId, $offset = 0)
    {
        $config = [
            'total_rows' => $this->property_model->count_all_sold_out($propertyType, $userId),
            'per_page' => 10,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->property_model->get_sold_out_property($propertyType, $userId, $config['per_page'], $offset);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if (count($property_list) > 0) {
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }





    public function detail_get($id)
    {
        $property_detail = $this->property_model->find_by_id($id);
        $property_photo = $this->property_model->get_photo($id);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if ($property_detail) {
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_detail,
                "photo" => $property_photo,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
                "data" => $property_detail
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }



    public function created_get()
    {
        $title_mm = $this->security->xss_clean($this->input->get("title_mm"));
        $title_eng = $this->security->xss_clean($this->input->get("title_eng"));
        $property_type_id = $this->security->xss_clean($this->input->get("property_type_id"));
        $price = $this->security->xss_clean($this->input->get("price"));
        $price_type = $this->security->xss_clean($this->input->get("price_type"));
        $property_status = $this->security->xss_clean($this->input->get("property_status"));
        $area = $this->security->xss_clean($this->input->get("area"));
        $area_type = $this->security->xss_clean($this->input->get("area_type"));
        $room = $this->security->xss_clean($this->input->get("room"));
        $bathroom = $this->security->xss_clean($this->input->get("bathroom"));
        $bedroom = $this->security->xss_clean($this->input->get("bedroom"));
        $masterbathroom = $this->security->xss_clean($this->input->get("masterbathroom"));
        $livingroom = $this->security->xss_clean($this->input->get("livingroom"));
        $region_id = $this->security->xss_clean($this->input->get("region_id"));
        $township_id = $this->security->xss_clean($this->input->get("township_id"));
        $contact_number = $this->security->xss_clean($this->input->get("contact_number"));
        $description_mm = $this->security->xss_clean($this->input->get("description_mm"));
        $description_eng = $this->security->xss_clean($this->input->get("description_eng"));
        $floor = $this->security->xss_clean($this->input->get("floor"));
        $build_year = $this->security->xss_clean($this->input->get("build_year"));
        $bankinstallment = $this->security->xss_clean($this->input->get("bankinstallment"));
        $TypeOfProperty = $this->security->xss_clean($this->input->get("TypeOfProperty"));
        $userId = $this->security->xss_clean($this->input->get("userId"));


        if (!empty($title_mm) && !empty($TypeOfProperty) && !empty($property_type_id) && !empty($price) && !empty($price_type) && !empty($userId)) {

            if ($TypeOfProperty == 'for_sale') {
                $propertie_type = "S-";
            } elseif ($TypeOfProperty == 'for_rent') {
                $propertie_type = "R-";
            } elseif ($TypeOfProperty == 'new_properties') {
                $propertie_type = "N-";
            } elseif ($TypeOfProperty == 'by_owner_for_sale') {
                $propertie_type = "OS-";
            } elseif ($TypeOfProperty == 'by_owner_for_rent') {
                $propertie_type = "OR-";
            } elseif ($TypeOfProperty == 'hostel') {
                $propertie_type = "H-";
            }


            $propertie_type = $propertie_type; //sale or rent or new_property
            $count = $this->property_count_model->property_count($TypeOfProperty);
            $last = $count;
            $last++;
            $number = sprintf('%06d', $last);
            $ad_number = $propertie_type . $number;


            $data = array(
                'ad_number' => $ad_number,
                'title_eng' => $title_eng,
                'title_mm' => $title_mm,
                'property_type_id' => $property_type_id,
                "price" => $price,
                'price_type' => $price_type,
                'property_status' => $property_status,
                'area' => $area,
                'area_type' => $area_type,
                'room' => $room,
                'bathroom' => $bathroom,
                'masterbathroom' => $masterbathroom,
                'bedroom' => $bedroom,
                'livingroom' => $livingroom,
                'region_id' => $region_id,
                'township_id' => $township_id,
                'contact_number' => $contact_number,
                'description_mm' => $description_mm,
                'description_eng' => $description_eng,
                'floor' => $floor,
                'build_year' => $build_year,
                'bankinstallment' => $bankinstallment,
                'TypeOfProperty' => $TypeOfProperty,
                'userId' => $userId,
            );

            $insert_id =  $this->property_model->PropertyCreate($data);
            $this->property_model->insert_properties_counter($data);
            $check = $this->property_model->find_by_id($insert_id);
            if ($check) {
                $this->response(array(
                    "status" => 1,
                    "data" => $check,
                    "message" => "Success",
                ), REST_Controller::HTTP_OK);
            }
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function updated_get()
    {
        $title_mm = $this->security->xss_clean($this->input->get("title_mm"));
        $title_eng = $this->security->xss_clean($this->input->get("title_eng"));
        $property_type_id = $this->security->xss_clean($this->input->get("property_type_id"));
        $price = $this->security->xss_clean($this->input->get("price"));
        $price_type = $this->security->xss_clean($this->input->get("price_type"));
        $property_status = $this->security->xss_clean($this->input->get("property_status"));
        $area = $this->security->xss_clean($this->input->get("area"));
        $area_type = $this->security->xss_clean($this->input->get("area_type"));
        $room = $this->security->xss_clean($this->input->get("room"));
        $bathroom = $this->security->xss_clean($this->input->get("bathroom"));
        $bedroom = $this->security->xss_clean($this->input->get("bedroom"));
        $masterbathroom = $this->security->xss_clean($this->input->get("masterbathroom"));
        $livingroom = $this->security->xss_clean($this->input->get("livingroom"));
        $region_id = $this->security->xss_clean($this->input->get("region_id"));
        $township_id = $this->security->xss_clean($this->input->get("township_id"));
        $contact_number = $this->security->xss_clean($this->input->get("contact_number"));
        $description_mm = $this->security->xss_clean($this->input->get("description_mm"));
        $description_eng = $this->security->xss_clean($this->input->get("description_eng"));
        $floor = $this->security->xss_clean($this->input->get("floor"));
        $build_year = $this->security->xss_clean($this->input->get("build_year"));
        $bankinstallment = $this->security->xss_clean($this->input->get("bankinstallment"));
        $sale_id = $this->security->xss_clean($this->input->get("sale_id"));

        if (!empty($title_mm)) {

            $data = array(
                'title_mm' => $title_mm,
                'title_eng' => $title_eng,
                'property_type_id' => $property_type_id,
                "price" => $price,
                'price_type' => $price_type,
                'property_status' => $property_status,
                'area' => $area,
                'area_type' => $area_type,
                'room' => $room,
                'bathroom' => $bathroom,
                'bedroom' => $bedroom,
                'masterbathroom' => $masterbathroom,
                'livingroom' => $livingroom,
                'region_id' => $region_id,
                'township_id' => $township_id,
                'contact_number' => $contact_number,
                'description_mm' => $description_mm,
                'description_eng' => $description_eng,
                'floor' => $floor,
                'build_year' => $build_year,
                'bankinstallment' => $bankinstallment,
                'sale_id' => $sale_id,
            );

            $this->property_model->PropertyUpdate($data);
            $this->response(array(
                "status" => 1,
                "message" => "Success",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Something Wrong"
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function creat_post()
    {
        $data = json_decode(file_get_contents("php://input"));

        if ($data->TypeOfProperty == 'for_sale') {
            $propertie_type = "S-";
        } elseif ($data->TypeOfProperty == 'for_rent') {
            $propertie_type = "R-";
        } elseif ($data->TypeOfProperty == 'new_properties') {
            $propertie_type = "N-";
        } elseif ($data->TypeOfProperty == 'by_owner_for_sale') {
            $propertie_type = "OS-";
        } elseif ($data->TypeOfProperty == 'by_owner_for_rent') {
            $propertie_type = "OR-";
        } elseif ($data->TypeOfProperty == 'hostel') {
            $propertie_type = "H-";
        }

        $propertie_type = $propertie_type; //sale or rent or new_property
        $count = $this->property_count_model->property_count($data->TypeOfProperty);
        $last = $count;
        $last++;
        $number = sprintf('%06d', $last);
        $ad_number = $propertie_type . $number;


        $save = array(
            'ad_number' => $ad_number,
            'title_eng' => $data->title_eng,
            'title_mm' => $data->title_mm,
            'property_type_id' => $data->property_type_id,
            "price" => $data->price,
            'price_type' => $data->price_type,
            'property_status' => $data->property_status,
            'area' => $data->area,
            'area_type' => $data->area_type,
            'room' => $data->room,
            'bathroom' => $data->bathroom,
            'masterbathroom' => $data->masterbathroom,
            'bedroom' => $data->bedroom,
            'livingroom' => $data->livingroom,
            'region_id' => $data->region_id,
            'township_id' => $data->township_id,
            'contact_number' => $data->contact_number,
            'description_mm' => $data->description_mm,
            'description_eng' => $data->description_eng,
            'floor' => $data->floor,
            'build_year' => $data->build_year,
            'bankinstallment' => $data->bankinstallment,
            'TypeOfProperty' => $data->TypeOfProperty,
            'userId' => $data->userId,
        );

        $insert_id =  $this->property_model->PropertyCreate($save);
        $this->property_model->insert_properties_counter($save);
        $check = $this->property_model->find_by_id($insert_id);
        if ($check) {
            $this->response(array(
                "status" => 1,
                "data" => $check,
                "message" => "Success",
            ), REST_Controller::HTTP_OK);
        }
    }



    public function upda_post()
    {
        $data = json_decode(file_get_contents("php://input"));
        $save = array(
            'title_mm' => $data->title_mm,
            'title_eng' => $data->title_eng,
            'property_type_id' => $data->property_type_id,
            "price" => $data->price,
            'price_type' => $data->price_type,
            'property_status' => $data->property_status,
            'area' => $data->area,
            'area_type' => $data->area_type,
            'room' => $data->room,
            'bathroom' => $data->bathroom,
            'bedroom' => $data->bedroom,
            'masterbathroom' => $data->masterbathroom,
            'livingroom' => $data->livingroom,
            'region_id' => $data->region_id,
            'township_id' => $data->township_id,
            'contact_number' => $data->contact_number,
            'description_mm' => $data->description_mm,
            'description_eng' => $data->description_eng,
            'floor' => $data->floor,
            'build_year' => $data->build_year,
            'bankinstallment' => $data->bankinstallment,
            'sale_id' => $data->sale_id,
        );

        $this->property_model->PropertyUpdate($save);
        $this->response(array(
            "status" => 1,
            "message" => "Success",
        ), REST_Controller::HTTP_OK);
    }


    function process_upload_post($id)
    {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $property_id =  $id; //$this->input->post('properties_id')
            $name = $this->upload->data('file_name');

            $data = array('upload_data' => $this->upload->data());
            $full_path = $data['upload_data']['full_path'];
            $this->overlayWatermark($full_path);

            $this->db->insert('propertie_photo', array('photo' => $name, 'properties_id' => $property_id));

            $this->response(array(
                "status" => 1,
                "data" => $data,
                "message" => "File Upload Success",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "File Upload Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
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


    public function fetchImage_get($id)
    {
        $property_photo = $this->property_model->get_photo($id);
        if ($property_photo) {
            $this->response(array(
                "status" => 1,
                "message" => "Image found",
                "data" => $property_photo,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "No Image found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function deleteImage_get($id)
    {
        $image_delete = $this->property_model->photo_remove($id);
        if ($image_delete) {
            $this->response(array(
                "status" => 1,
                "message" => "Delete",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function DeleteProperty_get($id)
    {
        $image_delete = $this->property_model->photo_remove($id);
        $delete_property = $this->property_model->delete_property($id);
        if ($image_delete && $delete_property) {
            $this->response(array(
                "status" => 1,
                "message" => "Delete",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function SoldOutProperty_get($id)
    {
        $image_delete = $this->property_model->change_soldout_property($id);
        if ($image_delete) {
            $this->response(array(
                "status" => 1,
                "message" => "SoldOut",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function undosoldoutproperty_get($id)
    {
        $success = $this->property_model->change_undosoldout_property($id);
        if ($success) {
            $this->response(array(
                "status" => 1,
                "message" => "SoldOut",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function homepage_get($offset = 0)
    {
        $config = [
            'total_rows' => $this->property_model->home_count_all(),
            'per_page' => 15,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->property_model->getAllHome($config['per_page'], $offset);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if (count($property_list) > 0) {
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function featuredproperty_get($id)
    {
        $image_delete = $this->property_model->update_featured_property($id);
        if ($image_delete) {
            $this->response(array(
                "status" => 1,
                "message" => "Featured",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function refreshad_get($id, $userId)
    {
        $update_refreshad = $this->property_model->update_refreshad($id);
        $this->property_model->save_refresh_ad_counter($id, $userId);
        if ($update_refreshad) {
            $this->response(array(
                "status" => 1,
                "message" => "Featured",
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "Error",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    
    public function allproperty_get($propertyType, $offset = 0)
    {
        $config = [
            'total_rows' => $this->property_model->count_all($propertyType),
            'per_page' => 10,
        ];

        $this->pagination->initialize($config);
        $property_list = $this->property_model->getAllProperty($propertyType, $config['per_page'], $offset);
        $tatnaywon = $this->property_model->tatnaywon_company();

        if (count($property_list) > 0) {
            $this->response(array(
                "status" => 1,
                "message" => "Property found",
                "data" => $property_list,
                "tatnaywon" => $tatnaywon,
            ), REST_Controller::HTTP_OK);
        } else {
            $this->response(array(
                "status" => 0,
                "message" => "No Property found",
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
}
