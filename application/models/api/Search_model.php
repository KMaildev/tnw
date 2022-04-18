<?php
class Search_model extends CI_Model {


    public function findAdNumber($ad_number)
    {
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('ad_number'=> $ad_number, 'ad_status'=> 1));
        $this->db->order_by("sale_id", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }


    public function findPropertyAll($arr, $limit, $offset)
    {

        $price_from = $arr['from_price'];
        $price_to = $arr['to_price'];
        $propertie_type = $arr['type_of_property'];
        $property_type_id = $arr['TypeId'];
        $region_id = $arr['region_id'];
        $township_id = $arr['township_id'];
        $bank_installment = $arr['bankinstallment'];

        $table_where = $arr['type_of_property'];
        if ($table_where == 'for_sale') {
            $table_where = array($table_where, 'by_owner_for_sale');
        }elseif($table_where == 'for_rent'){
            $table_where = array($table_where, 'by_owner_for_rent', 'hostel');
        }

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
        $this->db->where(array('ad_status'=> 1));


        // Filter Search
        if (!empty($region_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.region_id'=> $region_id));
        }

        if (!empty($township_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.sale_township_id'=> $township_id));
        }

        if (!empty($property_type_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.sale_property_type'=> $property_type_id));
        }

        if (!empty($price_from) || !empty($price_to)) {
            $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
        }

        // Filter Search

        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }



    public function findPropertyCountAll($arr)
    {

        $price_from = $arr['from_price'];
        $price_to = $arr['to_price'];
        $propertie_type = $arr['type_of_property'];
        $property_type_id = $arr['TypeId'];
        $region_id = $arr['region_id'];
        $township_id = $arr['township_id'];
        $bank_installment = $arr['bankinstallment'];

        $table_where = $arr['type_of_property'];
        if ($table_where == 'for_sale') {
            $table_where = array($table_where, 'by_owner_for_sale');
        }elseif($table_where == 'for_rent'){
            $table_where = array($table_where, 'by_owner_for_rent', 'hostel');
        }

        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');

        $this->db->where_in('propertie_type', $table_where);
        $this->db->where(array('ad_status'=> 1));


        // Filter Search
        if (!empty($region_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.region_id'=> $region_id));
        }

        if (!empty($township_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.sale_township_id'=> $township_id));
        }

        if (!empty($property_type_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.sale_property_type'=> $property_type_id));
        }

        if (!empty($price_from) || !empty($price_to)) {
            $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
        }

        // Filter Search

        $this->db->group_by("properties_id");
        return $this->db->get()->num_rows();
    }


}
