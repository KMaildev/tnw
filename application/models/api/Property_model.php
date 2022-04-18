<?php
class Property_model extends CI_Model {

    public function getAll($propertyType, $limit, $offset)
    {
        $table_where = $propertyType;

        $this->db->limit($limit);
        $this->db->offset($offset);

        // $this->db->select("*");
        $this->db->select('user_info_id, logo, user_info_id, user_id, company_name, post_upload_date, ad_number, price, price_type, area, area_type, property_type_mm, region_mm, townships_mm, sale_id, rooms, bathroom, living_room, masterbathroom, propertie_type, installment, contact_number, sale_township_id, township_id, properties.region_id, region.region_id, sale_property_type, property_type_id, user_info_id, properties_id, photo');
        
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'ad_status'=> 1));
        
        $this->db->order_by("sale_id", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }


    public function count_all($propertyType)
    {
        $table_where = $propertyType;
        // $this->db->select("*");
        $this->db->select('user_info_id, logo, user_info_id, user_id, company_name, post_upload_date, ad_number, price, price_type, area, area_type, property_type_mm, region_mm, townships_mm, sale_id, rooms, bathroom, living_room, masterbathroom, propertie_type, installment, contact_number, sale_township_id, township_id, properties.region_id, region.region_id, sale_property_type, property_type_id, user_info_id, properties_id, photo');
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'ad_status'=> 1));
        $this->db->group_by("properties_id");
        return $this->db->get()->num_rows();
    }


    public function get_property_by_company($propertyType, $UserId)
    {
        if ($propertyType == 'for_sale' || $propertyType == 'for_rent') {
            $this->db->where(array('propertie_type'=> $propertyType));
        }elseif ($propertyType == 'all') {
            $where = array('for_sale', 'for_rent');
            $this->db->where_in('propertie_type', $where);
        }

        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('user_info_id'=> $UserId, 'ad_status'=> 1));
        $this->db->order_by("sale_id", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }


    public function find_by_userId($propertyType, $userId, $limit, $offset)
    {
        $table_where = $propertyType;

        $this->db->limit($limit);
        $this->db->offset($offset);

        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'user_info_id'=> $userId, 'ad_status'=> 1));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }


    public function count_all_userId($propertyType, $userId)
    {
        $table_where = $propertyType;
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'user_info_id'=> $userId, 'ad_status'=> 1));
        $this->db->group_by("properties_id");
        return $this->db->get()->num_rows();
    }


    public function get_sold_out_property($propertyType, $userId, $limit, $offset)
    {
        $table_where = $propertyType;
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'soldout_status'=> 1, 'user_info_id'=> $userId, 'ad_status'=> 1));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }


    public function count_all_sold_out($propertyType, $userId)
    {
        $table_where = $propertyType;
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'soldout_status'=> 1, 'user_info_id'=> $userId, 'ad_status'=> 1));
        $this->db->group_by("properties_id");
        return $this->db->get()->num_rows();
    }


    public function tatnaywon_company()
    {
        $this->db->select("*");
        $this->db->from("company");
        $this->db->where('company_id', 1);
        return $this->db->get()->row();
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id ','Left');
        $this->db->where(array('sale_id'=> $id));
        return $this->db->get()->row();
    }


    public function get_photo($id) {
        $this->db->select('*');
        $this->db->from('propertie_photo');
        $this->db->where(array('properties_id'=> $id));
        return $this->db->get()->result();
    }


    public function PropertyCreate($data)
    {
        $arr['title_eng'] = $data['title_eng'];
        $arr['title_mm'] = $data['title_mm'];
        $arr['region_id'] = $data['region_id'];
        $arr['sale_township_id'] = $data['township_id'];
        $arr['sale_property_type'] = $data['property_type_id'];
        $arr['floor'] = $data['floor'];
        $arr['area'] = $data['area'];
        $arr['area_type'] = $data['area_type'];
        $arr['price'] = $data['price'];
        $arr['price_type'] = $data['price_type'];
        $arr['installment'] = $data['bankinstallment'];
        $arr['property_status'] = $data['property_status'];
        $arr['rooms'] = $data['room'];
        $arr['bathroom'] = $data['bathroom'];
        $arr['masterbathroom'] = $data['masterbathroom'];
        $arr['bead_room'] = $data['bedroom'];
        $arr['living_room'] = $data['livingroom'];
        $arr['contact_number'] = $data['contact_number'];
        $arr['description_mm'] = $data['description_mm'];
        $arr['description_eng'] = $data['description_eng'];
        $arr['year_built'] = $data['build_year'];
        $arr['propertie_type'] = $data['TypeOfProperty'];


        $arr['dining_room'] = '';
        $arr['other_room'] = '';
        $arr['shrine_room'] = '';
        $arr['swimming_pool'] = '';
        $arr['securit'] = '';
        $arr['air_conditioning'] = '';
        $arr['wifi'] = '';
        $arr['balcony'] = '';
        $arr['cctv'] = '';
        $arr['car_parking'] = '';
        $arr['dishwasher'] = '';
        $arr['generator'] = '';
        $arr['near_church'] = '';
        $arr['garden'] = '';
        $arr['gym'] = '';
        $arr['lift'] = '';
        $arr['play_ground'] = '';
        $arr['water_heater'] = '';
        $arr['mountain_view'] = '';
        $arr['pagoda_view'] = '';
        $arr['sea_view'] = '';
        $arr['lake_view'] = '';
        $arr['city_view'] = '';
        $arr['garden_view'] = '';
        $arr['river_view'] = '';
        $arr['showroom'] = '';
        $arr['restaurant'] = '';
        $arr['office'] = '';
        $arr['warehouse'] = '';
        $arr['plans_photo'] = '';
        $arr['video'] = '';
        $arr['education'] = '';
        $arr['health'] = '';
        $arr['transportation'] = '';
        $arr['map_link'] = '';
        $arr['share_agent_fee'] = '';
        $arr['top_featured'] = '';

        $arr['ad_number'] = $data['ad_number'];
        $arr['ad_status'] = 1;
        $arr['user_info_id'] = $data['userId'];
        $arr['carete_date'] = date("Y-m-d");
        $arr['post_upload_date'] = date("j F, Y H:i a");
        $arr['upload_type'] = 'For_Agent';

        $this->db->insert('properties', $arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }


    public function insert_properties_counter($data)
    {
        $arr['title_eng'] = $data['title_eng'];
        $arr['title_mm'] = $data['title_mm'];
        $arr['region_id'] = $data['region_id'];
        $arr['sale_township_id'] = $data['township_id'];
        $arr['sale_property_type'] = $data['property_type_id'];
        $arr['propertie_type'] = $data['TypeOfProperty'];
        $arr['ad_number'] = $data['ad_number'];
        $arr['user_info_id'] = $data['userId'];
        $arr['property_status'] = '';
        $arr['upload_type'] = 'For_Agent';
        $arr['carete_date'] = date("Y-m-d");
        $arr['post_upload_date'] = date("j F, Y H:i a");
        return $this->db->insert('properties_counter', $arr);
    }


    public function PropertyUpdate($data)
    {
        $arr['title_eng'] = $data['title_eng'];
        $arr['title_mm'] = $data['title_mm'];
        $arr['region_id'] = $data['region_id'];
        $arr['sale_township_id'] = $data['township_id'];
        $arr['sale_property_type'] = $data['property_type_id'];
        $arr['floor'] = $data['floor'];
        $arr['area'] = $data['area'];
        $arr['area_type'] = $data['area_type'];
        $arr['price'] = $data['price'];
        $arr['price_type'] = $data['price_type'];
        $arr['installment'] = $data['bankinstallment'];
        $arr['property_status'] = $data['property_status'];
        $arr['rooms'] = $data['room'];
        $arr['bathroom'] = $data['bathroom'];
        $arr['masterbathroom'] = $data['masterbathroom'];
        $arr['bead_room'] = $data['bedroom'];
        $arr['living_room'] = $data['livingroom'];
        $arr['contact_number'] = $data['contact_number'];
        $arr['description_mm'] = $data['description_mm'];
        $arr['description_eng'] = $data['description_eng'];
        $arr['year_built'] = $data['build_year'];


        $arr['dining_room'] = '';
        $arr['other_room'] = '';
        $arr['shrine_room'] = '';
        $arr['swimming_pool'] = '';
        $arr['securit'] = '';
        $arr['air_conditioning'] = '';
        $arr['wifi'] = '';
        $arr['balcony'] = '';
        $arr['cctv'] = '';
        $arr['car_parking'] = '';
        $arr['dishwasher'] = '';
        $arr['generator'] = '';
        $arr['near_church'] = '';
        $arr['garden'] = '';
        $arr['gym'] = '';
        $arr['lift'] = '';
        $arr['play_ground'] = '';
        $arr['water_heater'] = '';
        $arr['mountain_view'] = '';
        $arr['pagoda_view'] = '';
        $arr['sea_view'] = '';
        $arr['lake_view'] = '';
        $arr['city_view'] = '';
        $arr['garden_view'] = '';
        $arr['river_view'] = '';
        $arr['showroom'] = '';
        $arr['restaurant'] = '';
        $arr['office'] = '';
        $arr['warehouse'] = '';
        $arr['plans_photo'] = '';
        $arr['video'] = '';
        $arr['education'] = '';
        $arr['health'] = '';
        $arr['transportation'] = '';
        $arr['map_link'] = '';
        $arr['share_agent_fee'] = '';
        $arr['top_featured'] = '';

        $arr['ad_status'] = 1;
        $arr['carete_date'] = date("Y-m-d");
        $arr['post_upload_date'] = date("j F, Y H:i a");

        $sale_id = $data['sale_id'];
        $this->db->where('sale_id', $sale_id);
        return $this->db->update('properties', $arr);
    }


    public function photo_remove($id) {
        $this->db->where('propertie_id', $id);
        $this->db->delete('propertie_photo');
        return true;
    }

    public function delete_property($id) {
        $this->db->where('sale_id', $id);
        $this->db->delete('properties');
        return true;
    }


    public function change_soldout_property($id) {
        $arr['soldout_status'] = 1;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }

    public function change_undosoldout_property($id) {
        $arr['soldout_status'] = 0;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }
    
    
    public function getAllHome($limit, $offset)
    {
        
        $table_where = array('for_sale', 'by_owner_for_sale', 'for_rent',);

        $this->db->limit($limit);
        $this->db->offset($offset);

        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        
        
        $this->db->where_in('propertie_type', $table_where);
        $this->db->where(array('ad_status' => 1, 'top_featured' => 'Yes'));
        
        $this->db->order_by("sale_id", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }
    
    public function home_count_all()
    {
        $table_where = array('for_sale', 'by_owner_for_sale');
        
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        
        $this->db->where_in('propertie_type', $table_where);
        $this->db->where(array('ad_status' => 1, 'top_featured' => 'Yes'));
        
        $this->db->group_by("properties_id");
        return $this->db->get()->num_rows();
    }
    
    
    public function update_featured_property($id) {
        $arr['top_featured'] = 'Yes';
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }
    
    
    public function update_refreshad($id) {
        $latest_record = $this->get_latest_record();
        $latest_id = $latest_record->refresh_ad;
        $arr['refresh_ad'] = $latest_id + 1;
        $this->db->where('sale_id', $id);
        $this->db->update('properties', $arr);
        return true;
    }
    
    
    public function get_latest_record() {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->order_by('refresh_ad', 'DESC');
        return $this->db->get()->row();
    }
    
    
    public function save_refresh_ad_counter($id, $userId)
    {
        $arr['userinfo_id'] = $userId;
        $arr['no_of_refresh'] = 1;
        $arr['refresh_property_id'] = $id;
        $arr['refresh_date'] = date("Y-m-d");
        return $this->db->insert('refresh_ad_counter', $arr);
    }
    
    
    public function getAllProperty($propertyType, $limit, $offset)
    {
        $table_where = $propertyType;

        $this->db->limit($limit);
        $this->db->offset($offset);

        // $this->db->select("*");
        $this->db->select('user_info_id, logo, user_info_id, user_id, company_name, post_upload_date, ad_number, price, price_type, area, area_type, property_type_mm, region_mm, townships_mm, sale_id, rooms, bathroom, living_room, masterbathroom, propertie_type, installment, contact_number, sale_township_id, township_id, properties.region_id, region.region_id, sale_property_type, property_type_id, user_info_id, properties_id, photo');
        
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'ad_status'=> 1));
        
        $this->db->order_by("sale_id", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }
    

}
