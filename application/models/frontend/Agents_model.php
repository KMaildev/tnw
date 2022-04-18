<?php
class Agents_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('company_name'=>$keyword));
            $this->db->or_like(array('name'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("user_info");
        $this->db->join('package_order', 'user_info.user_id = package_order.user_info_id', 'Left');
        // $this->db->where('user_role !=', 'property_developer');
        $this->db->order_by("user_id ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('company_name'=>$keyword));
            $this->db->or_like(array('name'=>$keyword));
        }
        $this->db->where('user_role !=', 'property_developer');
        return $this->db->get('user_info')->num_rows();
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->join('region', 'user_info.region_id = region.region_id ','Left');
        $this->db->where(array('user_id'=> $id));
        return $this->db->get()->row();
    }

    public function recent_for_sale($id)
    {
        $this->db->select("*");
        $this->db->limit(100);
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> 'for_sale', 'ad_status'=> 1, 'user_info_id'=> $id));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function recent_for_rent($id)
    {
        $this->db->select("*");
        $this->db->limit(100);
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> 'for_rent', 'ad_status'=> 1, 'user_info_id'=> $id));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function recent_for_new_properties($id)
    {
        $this->db->select("*");
        $this->db->limit(100);
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id','Left');
        $this->db->where(array('propertie_type'=> 'new_properties', 'ad_status'=> 1, 'user_info_id'=> $id));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function home_page_agents()
    {
        $this->db->select("*");
        $this->db->order_by('rand()');
        $this->db->from("user_info");
        return $this->db->get()->result();
    }


    public function get_package($id){
        $this->db->select('*');
        $this->db->from('package_order');
        $this->db->where(array('user_info_id'=> $id, 'approval_status' => '1'));
        return $this->db->get()->row();
    }

    


}
