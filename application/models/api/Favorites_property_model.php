<?php
class Favorites_property_model extends CI_Model {

    public function add_favorites_update($propertyId, $userId){
        $arr['userinfo_id'] = $userId;
        $arr['properties_data_id'] = $propertyId;
        $arr['other_date'] = date("Y/m/d");
        $this->db->insert('favorites', $arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }



    public function getAll($userId, $limit, $offset)
    {
        $member_id = $userId;
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("favorites");
        $this->db->join('properties', 'favorites.properties_data_id = properties.sale_id ','Left');
         $this->db->join('user_info', 'favorites.userinfo_id = user_info.user_id','Left');
         $this->db->join('propertie_photo', 'favorites.properties_data_id = propertie_photo.properties_id','Left');
         $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id','Left');
         $this->db->join('townships', 'properties.sale_township_id = townships.township_id','Left');
        $this->db->join('region', 'properties.region_id = region.region_id','Left');
        $this->db->where(array('userinfo_id'=> $member_id));
        $this->db->group_by("properties_data_id");
        return $this->db->get()->result();
    }

    public function count_all($userId)
    {
        $member_id = $userId;
        $this->db->where(array('userinfo_id'=> $member_id));
        return $this->db->get('favorites')->num_rows();
    }


    public function destroy($id) {
        $this->db->where('f_id', $id);
        $this->db->delete('favorites');
        return true;
    }

}
