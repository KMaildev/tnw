<?php
class Property_create_model extends CI_Model
{

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($keyword) {
            $this->db->like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
            $this->db->or_like(array('title_mm' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->where(array('propertie_type' => 'for_sale', 'soldout_status' => 0));
        $this->db->order_by("sale_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('ad_number' => $keyword));
            $this->db->or_like(array('title_eng' => $keyword));
        }
        $this->db->where(array('propertie_type' => 'for_sale'));
        return $this->db->get('properties')->num_rows();
    }

    public function insert($data)
    {
        $arr['title_eng'] = $this->input->post('title_eng');
        $arr['title_mm'] = $this->input->post('title_mm');
        $arr['region_id'] = $this->input->post('region_id');
        $arr['sale_township_id'] = $this->input->post('township_id');
        $arr['sale_property_type'] = $this->input->post('property_type');
        $arr['floor'] = $this->input->post('floor');
        $arr['area'] = $this->input->post('area');
        $arr['area_type'] = $this->input->post('area_type');
        $arr['price'] = $this->input->post('price');
        $arr['price_type'] = $this->input->post('price_type');
        $arr['installment'] = $this->input->post('installment');
        $arr['property_status'] = $this->input->post('property_status') ?: '';
        $arr['rooms'] = $this->input->post('rooms');
        $arr['bathroom'] = $this->input->post('bathroom');
        $arr['dining_room'] = $this->input->post('dining_room');
        $arr['living_room'] = $this->input->post('living_room');
        $arr['bead_room'] = $this->input->post('bead_room');

        $arr['masterbathroom'] = $this->input->post('masterbathroom');

        $arr['other_room'] = $this->input->post('other_room');
        $arr['shrine_room'] = $this->input->post('shrine_room');
        $arr['year_built'] = $this->input->post('year_built');
        $arr['swimming_pool'] = $this->input->post('swimming_pool');
        $arr['securit'] = $this->input->post('securit');
        $arr['air_conditioning'] = $this->input->post('air_conditioning');
        $arr['wifi'] = $this->input->post('wifi');
        $arr['balcony'] = $this->input->post('balcony');
        $arr['cctv'] = $this->input->post('cctv');
        $arr['car_parking'] = $this->input->post('car_parking');
        $arr['dishwasher'] = $this->input->post('dishwasher');
        $arr['generator'] = $this->input->post('generator');
        $arr['near_church'] = $this->input->post('near_church');
        $arr['garden'] = $this->input->post('garden');
        $arr['gym'] = $this->input->post('gym');
        $arr['lift'] = $this->input->post('lift');
        $arr['play_ground'] = $this->input->post('play_ground');
        $arr['water_heater'] = $this->input->post('water_heater');
        $arr['mountain_view'] = $this->input->post('mountain_view');
        $arr['pagoda_view'] = $this->input->post('pagoda_view');
        $arr['sea_view'] = $this->input->post('sea_view');
        $arr['lake_view'] = $this->input->post('lake_view');
        $arr['city_view'] = $this->input->post('city_view');
        $arr['garden_view'] = $this->input->post('garden_view');
        $arr['river_view'] = $this->input->post('river_view');
        $arr['showroom'] = $this->input->post('showroom');
        $arr['restaurant'] = $this->input->post('restaurant');
        $arr['office'] = $this->input->post('office');
        $arr['warehouse'] = $this->input->post('warehouse');
        $arr['description_mm'] = $this->input->post('description_mm');
        $arr['description_eng'] = $this->input->post('description_eng');

        $arr['plans_photo'] = $data['plans_photo'];
        $arr['video'] = $data['video'];

        $arr['propertie_type'] = $this->input->post('propertie_type');
        $arr['ad_number'] = $data['ad_number'];
        $arr['education'] = $data['education'];
        $arr['health'] = $data['health'];
        $arr['transportation'] = $data['transportation'];


        $arr['upload_type'] = $this->input->post('upload_type');
        $arr['contact_number'] = $data['contact_number'];
        $arr['user_contact_name'] = $this->input->post('contact_name')  ?: '';
        $arr['user_address'] = $this->input->post('address')  ?: '';
        $arr['agent_owner_logo'] = $data['agent_owner_logo'];


        $arr['ad_status'] = 1;
        $arr['user_info_id'] = $this->input->post('user_info_id')  ?: 0;
        $arr['carete_date'] = date("Y-m-d");
        $arr['post_upload_date'] = date("j F, Y H:i a");

        $arr['map_link'] = $this->input->post('map_link');
        $arr['share_agent_fee'] = $this->input->post('share_agent_fee');
        $arr['top_featured'] = $this->input->post('top_featured');

        $arr['slide_status'] = $this->input->post('slide_status')  ?: 'No';

        $this->db->insert('properties', $arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }


    public function insert_properties_counter($data)
    {
        $arr['title_eng'] = $this->input->post('title_eng');
        $arr['title_mm'] = $this->input->post('title_mm');
        $arr['region_id'] = $this->input->post('region_id');
        $arr['sale_township_id'] = $this->input->post('township_id');
        $arr['sale_property_type'] = $this->input->post('property_type');
        $arr['propertie_type'] = $this->input->post('propertie_type');
        $arr['ad_number'] = $data['ad_number'];
        $arr['upload_type'] = $this->input->post('upload_type');
        $arr['user_info_id'] = $this->input->post('user_info_id')  ?: 0;
        $arr['carete_date'] = date("Y-m-d");
        $arr['post_upload_date'] = date("j F, Y H:i a");
        return $this->db->insert('properties_counter', $arr);
    }


    public function update($data)
    {
        $arr['title_eng'] = $this->input->post('title_eng');
        $arr['title_mm'] = $this->input->post('title_mm');
        $arr['region_id'] = $this->input->post('region_id');
        $arr['sale_township_id'] = $this->input->post('township_id');
        $arr['sale_property_type'] = $this->input->post('property_type');
        $arr['floor'] = $this->input->post('floor');
        $arr['area'] = $this->input->post('area');
        $arr['area_type'] = $this->input->post('area_type');
        $arr['price'] = $this->input->post('price');
        $arr['price_type'] = $this->input->post('price_type');
        $arr['installment'] = $this->input->post('installment');
        $arr['property_status'] = $this->input->post('property_status') ?: '';
        $arr['rooms'] = $this->input->post('rooms');
        $arr['bathroom'] = $this->input->post('bathroom');
        $arr['dining_room'] = $this->input->post('dining_room');
        $arr['living_room'] = $this->input->post('living_room');
        $arr['bead_room'] = $this->input->post('bead_room');
        $arr['masterbathroom'] = $this->input->post('masterbathroom');
        $arr['other_room'] = $this->input->post('other_room');
        $arr['shrine_room'] = $this->input->post('shrine_room');
        $arr['year_built'] = $this->input->post('year_built');
        $arr['swimming_pool'] = $this->input->post('swimming_pool');
        $arr['securit'] = $this->input->post('securit');
        $arr['air_conditioning'] = $this->input->post('air_conditioning');
        $arr['wifi'] = $this->input->post('wifi');
        $arr['balcony'] = $this->input->post('balcony');
        $arr['cctv'] = $this->input->post('cctv');
        $arr['car_parking'] = $this->input->post('car_parking');
        $arr['dishwasher'] = $this->input->post('dishwasher');
        $arr['generator'] = $this->input->post('generator');
        $arr['near_church'] = $this->input->post('near_church');
        $arr['garden'] = $this->input->post('garden');
        $arr['gym'] = $this->input->post('gym');
        $arr['lift'] = $this->input->post('lift');
        $arr['play_ground'] = $this->input->post('play_ground');
        $arr['water_heater'] = $this->input->post('water_heater');
        $arr['mountain_view'] = $this->input->post('mountain_view');
        $arr['pagoda_view'] = $this->input->post('pagoda_view');
        $arr['sea_view'] = $this->input->post('sea_view');
        $arr['lake_view'] = $this->input->post('lake_view');
        $arr['city_view'] = $this->input->post('city_view');
        $arr['garden_view'] = $this->input->post('garden_view');
        $arr['river_view'] = $this->input->post('river_view');
        $arr['showroom'] = $this->input->post('showroom');
        $arr['restaurant'] = $this->input->post('restaurant');
        $arr['office'] = $this->input->post('office');
        $arr['warehouse'] = $this->input->post('warehouse');
        $arr['description_mm'] = $this->input->post('description_mm');
        $arr['description_eng'] = $this->input->post('description_eng');

        $arr['plans_photo'] = $data['plans_photo'];
        $arr['video'] = $data['video'];

        $arr['education'] = $data['education'];
        $arr['health'] = $data['health'];
        $arr['transportation'] = $data['transportation'];

        $arr['map_link'] = $this->input->post('map_link');
        $arr['share_agent_fee'] = $this->input->post('share_agent_fee');
        $arr['top_featured'] = $this->input->post('top_featured');

        $arr['contact_number'] = $data['contact_number']  ?: $this->input->post('contact_number_update');
        $arr['upload_type'] = $this->input->post('upload_type');
        $arr['user_contact_name'] = $this->input->post('contact_name')  ?: '';
        $arr['user_address'] = $this->input->post('address')  ?: '';
        $arr['agent_owner_logo'] = $data['agent_owner_logo'];

        $arr['ad_status'] = 1;
        $arr['user_info_id'] = $this->input->post('user_info_id')  ?: 0;
        $arr['slide_status'] = $this->input->post('slide_status')  ?: 'No';
        $id = $this->input->post('propertie_id');


        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }

    public function fileUploadData($data)
    {
        $data['for_sale_photo'] = $data['for_sale_photo'];
        $id = $this->input->post('insert_id');
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $data);
        return true;
    }


    public function getDataById($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id ', 'Left');
        $this->db->where(array('sale_id' => $id));
        return $this->db->get()->row();
    }

    public function find_by_region($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where(array('sale_id' => $id));
        return $this->db->get()->row();
    }


    public function getDataByPhoto($id)
    {
        $this->db->select('*');
        $this->db->from('propertie_photo');
        $this->db->where(array('properties_id' => $id));
        return $this->db->get()->result();
    }

    public function getDataByIdMember($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where(array('sale_id' => $id));
        return $this->db->get()->row();
    }


    public function destroy_properties($id)
    {
        $this->db->where('sale_id', $id);
        $this->db->delete('properties');
        return true;
    }

    public function destroy_propertie_photo($id)
    {
        $this->db->where('properties_id', $id);
        $this->db->delete('propertie_photo');
        return true;
    }

    public function photo_remove($id)
    {
        $this->db->where('propertie_id', $id);
        $this->db->delete('propertie_photo');
        return true;
    }

    public function changeStatusActive($id)
    {
        $arr['ad_status'] = 0;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }

    public function changeStatusInactive($id)
    {
        $arr['ad_status'] = 1;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }
}
