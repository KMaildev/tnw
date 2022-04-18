<?php
class Favoritesadd_model extends CI_Model {

    public function add_favorites_update($id, $member_id){
        $arr['userinfo_id'] = $member_id;
        $arr['properties_data_id'] = $id;
        $arr['other_date'] = date("Y/m/d");
        $query = $this->db->insert('favorites', $arr);
    }

    public function getAll($arr, $limit, $offset)
    {
        $member_id = $arr['member_id'];
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("favorites");
        $this->db->join('properties', 'favorites.properties_data_id = properties.sale_id ','Left');
        $this->db->where(array('userinfo_id'=> $member_id));
        $this->db->order_by("f_id ", "DESC");
        // $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function count_all($arr)
    {
        $member_id = $arr['member_id'];
        $this->db->where(array('userinfo_id'=> $member_id));
        return $this->db->get('favorites')->num_rows();
    }

    public function destroy($id) {
        $this->db->where('f_id ', $id);
        $this->db->delete('favorites');
        return true;
    }

}
