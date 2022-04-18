<?php
class Want_to_buy_rent_model extends CI_Model
{

    public function get_all_data($arr_data, $limit, $offset)
    {
        $member_id = $arr_data['member_id'];
        $propertie_type = $arr_data['propertie_type'];

        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->like(array('ad_number' => $keyword));
            $this->db->or_like(array('title' => $keyword));
            $this->db->or_like(array('budget_from' => $keyword));
            $this->db->or_like(array('area' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("want_to_buy_rent");
        $this->db->join('townships', 'want_to_buy_rent.township_id = townships.township_id', 'Left');
        $this->db->join('region', 'want_to_buy_rent.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'want_to_buy_rent.property_type_id = property_type.property_type_id ', 'Left');
        $this->db->where(array('propertie_type' => $propertie_type, 'user_info_id' => $member_id));
        $this->db->order_by("w_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all($arr_data)
    {
        $member_id = $arr_data['member_id'];
        $propertie_type = $arr_data['propertie_type'];
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('ad_number' => $keyword));
            $this->db->or_like(array('title' => $keyword));
            $this->db->or_like(array('budget_from' => $keyword));
            $this->db->or_like(array('area' => $keyword));
        }

        $this->db->where(array('propertie_type' => $propertie_type, 'user_info_id' => $member_id));
        return $this->db->get('want_to_buy_rent')->num_rows();
    }

    public function save($data)
    {
        $arr['ad_number'] = $data['ad_number'];
        $arr['title'] = $this->input->post('title');
        $arr['region_id'] = $this->input->post('region_id');
        $arr['township_id'] = $this->input->post('township_id');
        $arr['property_type_id'] = $this->input->post('property_type_id');
        $arr['floor'] = $this->input->post('floor');
        $arr['area'] = $this->input->post('area');
        $arr['area_type'] = $this->input->post('area_type');
        $arr['agent_allow_status'] = $this->input->post('agent_allow_status');
        $arr['property_status'] = $this->input->post('property_status');
        $arr['bedroom'] = $this->input->post('bedroom');
        $arr['bathroom'] = $this->input->post('bathroom');
        $arr['budget_from'] = $this->input->post('budget_from');
        $arr['budget_to'] = $this->input->post('budget_to');
        $arr['currency'] = $this->input->post('currency');
        $arr['description_mm'] = $this->input->post('description_mm');
        $arr['description_eng'] = $this->input->post('description_eng');
        $arr['propertie_type'] = $this->input->post('buy_rent_status');
        $arr['other_date'] = date("F j, Y");
        $arr['user_info_id'] = $data['member_id'];
        $arr['date'] = date("Y-m-d");
        $arr['phone'] = $this->input->post('phone');

        $arr['buy_rent_status'] = $this->input->post('buy_rent_status');

        return $this->db->insert('want_to_buy_rent', $arr);
    }


    public function save_want_to_buy_rent_count($data)
    {
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['buy_rent_status'] = $this->input->post('buy_rent_status');
        $arr['user_info_id'] = $data['member_id'];
        return $this->db->insert('want_to_buy_rent_count', $arr);
    }


    public function find_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('want_to_buy_rent');
        $this->db->where(array('w_id' => $id));
        return $this->db->get()->row();
    }

    public function destroy($id)
    {
        $this->db->where('w_id', $id);
        $this->db->delete('want_to_buy_rent');
        return true;
    }

    public function update()
    {
        $arr['title'] = $this->input->post('title');
        $arr['region_id'] = $this->input->post('region_id');
        $arr['township_id'] = $this->input->post('township_id');
        $arr['property_type_id'] = $this->input->post('property_type_id');
        $arr['property_status'] = $this->input->post('property_status');
        $arr['floor'] = $this->input->post('floor');
        $arr['area'] = $this->input->post('area');
        $arr['area_type'] = $this->input->post('area_type');
        $arr['agent_allow_status'] = $this->input->post('agent_allow_status');
        $arr['bedroom'] = $this->input->post('bedroom');
        $arr['bathroom'] = $this->input->post('bathroom');
        $arr['budget_from'] = $this->input->post('budget_from');
        $arr['budget_to'] = $this->input->post('budget_to');
        $arr['currency'] = $this->input->post('currency');
        $arr['phone'] = $this->input->post('phone');
        $arr['description_mm'] = $this->input->post('description_mm');
        $arr['description_eng'] = $this->input->post('description_eng');
        $id = $this->input->post('want_to_buy_rent_id');

        $this->db->where('w_id', $id);
        $this->db->update('want_to_buy_rent', $arr);
        return true;
    }
}
