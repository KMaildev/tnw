<?php
class Wanted_list_model extends CI_Model {

    public function getAll($arr, $limit, $offset)
    {
        $table_where = $arr['propertie_type'];
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->like(array('ad_number'=>$keyword));
            $this->db->or_like(array('title'=>$keyword));
        }
        if ($from && $to) {
            $this->db->where("date BETWEEN '$from' AND '$to'");
        }
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("want_to_buy_rent");
        $this->db->join('townships', 'want_to_buy_rent.township_id = townships.township_id','Left');
        $this->db->join('region', 'want_to_buy_rent.region_id = region.region_id','Left');
        $this->db->join('property_type', 'want_to_buy_rent.property_type_id = property_type.property_type_id','Left');
        $this->db->where(array('propertie_type'=> $table_where, 'is_active'=> 1));
        $this->db->order_by("w_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all($arr)
    {
        $table_where = $arr['propertie_type'];
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('ad_number'=>$keyword));
            $this->db->or_like(array('title'=>$keyword));
        }
        $this->db->where(array('propertie_type'=> $table_where, 'is_active'=> 1));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('want_to_buy_rent');
        $this->db->join('region', 'want_to_buy_rent.region_id = region.region_id','Left');
        $this->db->join('townships', 'want_to_buy_rent.township_id = townships.township_id','Left');
        $this->db->join('property_type', 'want_to_buy_rent.property_type_id = property_type.property_type_id','Left');
        $this->db->join('user_info', 'want_to_buy_rent.user_info_id = user_info.user_id ','Left');
        $this->db->where(array('w_id'=> $id));
        return $this->db->get()->row();
    }

    public function viewer_count_update($id){
        $this->db->set('viewer_count', 'viewer_count + 1', FALSE);
        $this->db->where('w_id', $id);
        $this->db->update('want_to_buy_rent');
        return true;
    }


}