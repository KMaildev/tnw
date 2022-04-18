<?php
class Wanted_model extends CI_Model {

    public function getAll($propertie_type, $limit, $offset)
    {
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("want_to_buy_rent");
        $this->db->join('townships', 'want_to_buy_rent.township_id = townships.township_id','Left');
        $this->db->join('region', 'want_to_buy_rent.region_id = region.region_id','Left');
        $this->db->join('property_type', 'want_to_buy_rent.property_type_id = property_type.property_type_id','Left');
        $this->db->where(array('propertie_type'=> $propertie_type, 'is_active'=> 1));
        $this->db->order_by("w_id ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all($propertie_type)
    {
        $this->db->where(array('propertie_type'=> $propertie_type, 'is_active'=> 1));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }


    public function MyWantedList($UserId, $limit, $offset)
    {
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("want_to_buy_rent");
        $this->db->join('townships', 'want_to_buy_rent.township_id = townships.township_id','Left');
        $this->db->join('region', 'want_to_buy_rent.region_id = region.region_id','Left');
        $this->db->join('property_type', 'want_to_buy_rent.property_type_id = property_type.property_type_id','Left');
        $this->db->where(array('user_info_id'=> $UserId, 'is_active'=> 1));
        $this->db->order_by("w_id ", "DESC");
        return $this->db->get()->result();
    }


    public function MyWantedListCount($UserId)
    {
        $this->db->where(array('user_info_id'=> $UserId, 'is_active'=> 1));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }


    public function find_by_id($id)
    {
        $this->db->select("*");
        $this->db->from("want_to_buy_rent");
        $this->db->join('townships', 'want_to_buy_rent.township_id = townships.township_id','Left');
        $this->db->join('region', 'want_to_buy_rent.region_id = region.region_id','Left');
        $this->db->join('property_type', 'want_to_buy_rent.property_type_id = property_type.property_type_id','Left');
        $this->db->where(array('w_id'=> $id));
        return $this->db->get()->row();
    }

    
    public function PropertyCreate($data)
    {
        $arr['title'] = $data['title'];
        $arr['region_id'] = $data['region_id'];
        $arr['township_id'] = $data['township_id'];
        $arr['property_type_id'] = $data['property_type_id'];
        $arr['floor'] = $data['floor'];
        $arr['area'] = $data['area'];
        $arr['area_type'] = $data['area_type'];
        $arr['budget_from'] = $data['price_from'];
        $arr['budget_to'] = $data['price_to'];
        $arr['currency'] = $data['price_type'];
        $arr['property_status'] = $data['property_status'];
        $arr['bathroom'] = $data['bathroom'];
        $arr['bedroom'] = $data['bedroom'];
        $arr['phone'] = $data['contact_number'];
        $arr['description_mm'] = $data['description_mm'];
        $arr['description_eng'] = $data['description_eng'];
        $arr['buy_rent_status'] = $data['buy_rent_status'];
        $arr['propertie_type'] = $data['buy_rent_status'];
        $arr['ad_number'] = $data['ad_number'];
        $arr['is_active'] = 1;
        $arr['user_info_id'] = $data['userId'];
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("j F, Y H:i a");

        $arr['agent_allow_status'] = $data['agent_allow_status'];

        $this->db->insert('want_to_buy_rent', $arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }



    public function want_to_buy_rent_count_create($data)
    {

        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("j F, Y H:i a");
        $arr['buy_rent_status'] = $data['buy_rent_status'];
        $arr['user_info_id'] = $data['userId'];
        $this->db->insert('want_to_buy_rent_count', $arr);
        return $this->db->insert_id();
    }



    public function PropertyUpdate($data)
    {
        $arr['title'] = $data['title'];
        $arr['region_id'] = $data['region_id'];
        $arr['township_id'] = $data['township_id'];
        $arr['property_type_id'] = $data['property_type_id'];
        $arr['floor'] = $data['floor'];
        $arr['area'] = $data['area'];
        $arr['area_type'] = $data['area_type'];
        $arr['budget_from'] = $data['price_from'];
        $arr['budget_to'] = $data['price_to'];
        $arr['currency'] = $data['price_type'];
        $arr['property_status'] = $data['property_status'];
        $arr['bathroom'] = $data['bathroom'];
        $arr['bedroom'] = $data['bedroom'];
        $arr['phone'] = $data['contact_number'];
        $arr['description_mm'] = $data['description_mm'];
        $arr['description_eng'] = $data['description_eng'];
        $arr['is_active'] = 1;
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("j F, Y H:i a");
        $arr['agent_allow_status'] = $data['agent_allow_status'];

        $w_id = $data['w_id'];
        $this->db->where('w_id', $w_id);
        return $this->db->update('want_to_buy_rent', $arr);
    }


    public function delete_wanted($id) {
        $this->db->where('w_id', $id);
        $this->db->delete('want_to_buy_rent');
        return true;
    }


}
