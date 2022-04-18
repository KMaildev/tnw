<?php
class Category_model extends CI_Model {

    // get_by_category
    public function get_category($limit, $offset)
    {
        $property_type_id = $this->input->get('type');
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->cache_on();
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('sale_property_type'=> $property_type_id, 'ad_status'=> 1));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $property_type_id = $this->input->get('propertydata_type_id');
        $this->db->where(array('sale_property_type'=> $property_type_id, 'ad_status'=> 1));
        return $this->db->get('properties')->num_rows();
    }

    // get_by_category end



    // search_by_id_start

    public function search_by_id($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->cache_on();
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');

        if (!empty($keyword)) {
            $this->db->where(array('ad_status'=> 1, 'ad_number'=> $keyword));
        }

        $this->db->where(array('ad_status'=> 1));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function count_all_search_by_id()
    {
        $keyword = $this->input->get('keyword');
        if (!empty($keyword)) {
            $this->db->where(array('ad_status'=> 1, 'ad_number'=> $keyword));
        }
        $this->db->where(array('ad_status'=> 1));
        return $this->db->get('properties')->num_rows();
    }

    // search_by_id_end




    // advance_search_start
    public function advance_search($arr, $limit, $offset)
    {
        $price_from = $this->input->get('price_from');
        $price_to = $this->input->get('price_to');
        $propertie_type = $this->input->get('propertie_type');
        $property_type_id = $this->input->get('property_type_id');
        $region_id = $this->input->get('region_id');
        $township_id = $this->input->get('township_id');

        $bank_installment = $this->input->get('bank_installment');


        $reorder = $arr['reorder'];

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->cache_on();
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');

        if (!empty($region_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.region_id'=> $region_id));
        }

        if (!empty($township_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.sale_township_id'=> $township_id));
        }

        if (!empty($propertie_type)) {
            $this->db->where(array('ad_status'=> 1, 'propertie_type'=> $propertie_type));
        }

        if (!empty($property_type_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.sale_property_type'=> $property_type_id));
        }

        if (!empty($price_from) || !empty($price_to)) {
            $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
        }

        if (!empty($bank_installment)) {
            if ($bank_installment == 'All') {
            }else{
                $this->db->where(array('ad_status'=> 1, 'installment'=> $bank_installment));
            }
        }


        if ($reorder == 'old_to_new') {
            $this->db->order_by("sale_id ", "ASC");
        }elseif ($reorder == 'new_to_old') {
            $this->db->order_by("sale_id ", "DESC");
        }elseif ($reorder == 'low_to_hight') {
           $this->db->order_by("price ", "ASC");
        }elseif($reorder == 'hight_to_low'){
            $this->db->order_by("price ", "DESC");
        }else{
            $this->db->order_by("sale_id ", "DESC");
        }

        $this->db->where(array('ad_status'=> 1));
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }
    

    public function count_all_advance_search($arr)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('ad_number'=>$keyword));
            $this->db->or_like(array('title_mm'=>$keyword));
            $this->db->or_like(array('title_eng'=>$keyword));
        }

        $price_from = $this->input->get('price_from');
        $price_to = $this->input->get('price_to');
        $propertie_type = $this->input->get('propertie_type');
        $property_type_id = $this->input->get('property_type_id');
        $region_id = $this->input->get('region_id');
        $township_id = $this->input->get('township_id');

        $bank_installment = $this->input->get('bank_installment');


        $reorder = $arr['reorder'];

        if (!empty($region_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.region_id'=> $region_id));
        }

        if (!empty($propertie_type)) {
            $this->db->where(array('ad_status'=> 1, 'propertie_type'=> $propertie_type));
        }

        if (!empty($property_type_id)) {
            $this->db->where(array('ad_status'=> 1, 'properties.sale_property_type'=> $property_type_id));
        }

        if (!empty($price_from) || !empty($price_to)) {
            $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
        }

        if (!empty($bank_installment)) {
            if ($bank_installment == 'All') {
            }else{
                $this->db->where(array('ad_status'=> 1, 'installment'=> $bank_installment));
            }
        }


        if ($reorder == 'old_to_new') {
            $this->db->order_by("sale_id ", "ASC");
        }elseif ($reorder == 'new_to_old') {
            $this->db->order_by("sale_id ", "DESC");
        }elseif ($reorder == 'low_to_hight') {
           $this->db->order_by("price ", "ASC");
        }elseif($reorder == 'hight_to_low'){
            $this->db->order_by("price ", "DESC");
        }else{
            $this->db->order_by("sale_id ", "DESC");
        }
        
        $this->db->where(array('ad_status'=> 1));
        return $this->db->get('properties')->num_rows();
    }
    // advance_search_end


}
