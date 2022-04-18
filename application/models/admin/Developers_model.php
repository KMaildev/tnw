<?php
class Developers_model extends CI_Model
{

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');

        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->like(array('name' => $keyword));
            $this->db->or_like(array('email' => $keyword));
            $this->db->or_like(array('phone' => $keyword));
            $this->db->or_like(array('company_name' => $keyword));
            $this->db->or_like(array('address' => $keyword));
            $this->db->or_like(array('description' => $keyword));
            $this->db->or_like(array('description' => $keyword));
            $this->db->or_like(array('company_id' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("user_info");
        $this->db->join('region', 'user_info.region_id = region.region_id', 'Left');
        $this->db->order_by("user_id ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name' => $keyword));
            $this->db->or_like(array('email' => $keyword));
            $this->db->or_like(array('phone' => $keyword));
            $this->db->or_like(array('company_name' => $keyword));
            $this->db->or_like(array('address' => $keyword));
            $this->db->or_like(array('description' => $keyword));
            $this->db->or_like(array('company_id' => $keyword));
        }
        $this->db->select("*");
        $this->db->from("user_info");
        $this->db->join('region', 'user_info.region_id = region.region_id', 'Left');
        return $this->db->get()->num_rows();
    }



    public function getAllMember()
    {
        $this->db->select("*");
        $this->db->from("user_info");
        $this->db->order_by("user_id ", "DESC");
        return $this->db->get()->result();
    }

    public function save($data)
    {
        $arr['name'] = $this->input->post('name');
        $arr['email'] = $this->input->post('email');
        $arr['phone'] = $this->input->post('phone');
        $arr['address'] = $this->input->post('address');
        $arr['password'] = md5($this->input->post('password'));
        $arr['company_type'] = $this->input->post('company_type');
        $arr['description'] = $this->input->post('description');
        $arr['company_id'] = $this->input->post('company_id');
        $arr['company_name'] = $this->input->post('company_name');
        $arr['user_role'] = $data['company_type'];
        $arr['region_id'] = $this->input->post('region_id');
        $arr['package_id'] = $this->input->post('package_id');
        $arr['logo'] = $data['logo'];
        $arr['carete_date'] = date("Y-m-d");
        $this->db->insert('user_info', $arr);
    }


    public function member_register($data)
    {
        $arr['name'] = $data['name'];
        $arr['company_name'] = $data['company_name'];
        $arr['email'] = $data['login_mail'];
        $arr['confirm_mail'] = $data['confirm_mail'];
        $arr['password'] = $data['password'];
        $arr['company_id'] = $data['company_id'];
        $arr['user_permissions'] = $this->input->post('user_permissions');
        $arr['package_id'] = 1;
        $arr['carete_date'] = date("Y-m-d");
        $arr['phone'] = $data['phone_no'];
        $arr['address'] = $data['address'];
        $arr['description'] = $data['description'];
        $arr['company_type'] = $data['company_type'];
        $arr['logo'] = $data['logo'];
        $arr['region_id'] = $data['region_id'];
        return $this->db->insert('user_info', $arr);
    }

    public function latest_auth_check($insert_id)
    {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where(array('user_id' => $insert_id));
        return $this->db->get()->row();
    }


    public function update($data)
    {
        // $arr['name'] = $this->input->post('name');
        $arr['email'] = $data['email'];
        $arr['phone'] = $this->input->post('phone_no');
        $arr['address'] = $this->input->post('address');
        $arr['company_type'] = $this->input->post('company_type');
        $arr['description'] = $this->input->post('description');
        $arr['company_name'] = $this->input->post('company_name');
        $arr['user_role'] = $data['company_type'];
        $arr['region_id'] = $this->input->post('region_id');
        $arr['package_id'] = 1;
        $id = $this->input->post('user_id');
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
    }

    public function change_password()
    {
        $arr['password'] = md5($this->input->post('password'));
        $id = $this->input->post('user_id');
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
    }

    public function change_company_logo($data)
    {
        $arr['logo'] = $data['logo'];
        $id = $this->input->post('user_id');
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
    }


    public function find_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->join('region', 'user_info.region_id = region.region_id ', 'Left');
        $this->db->join('packages', 'user_info.package_id = packages.package_id ', 'Left');
        $this->db->where(array('user_id' => $id));
        return $this->db->get()->row();
    }

    public function total_sale_ad($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where(array('user_info_id' => $id, 'propertie_type' => 'for_sale'));
        return $this->db->get()->num_rows();
    }

    public function total_rent_ad($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where(array('user_info_id' => $id, 'propertie_type' => 'for_rent'));
        return $this->db->get()->num_rows();
    }

    public function total_new_properties_ad($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where(array('user_info_id' => $id, 'propertie_type' => 'new_properties'));
        return $this->db->get()->num_rows();
    }


    public function get_sale_ad($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->where(array('user_info_id' => $id, 'propertie_type' => 'for_sale'));
        return $this->db->get()->result();
    }

    public function get_rent_ad($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->where(array('user_info_id' => $id, 'propertie_type' => 'for_rent'));
        return $this->db->get()->result();
    }

    public function get_new_properties_ad($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->where(array('user_info_id' => $id, 'propertie_type' => 'new_properties'));
        return $this->db->get()->result();
    }


    public function destroy_properties($id)
    {
        $this->db->where('sale_id', $id);
        $this->db->delete('properties');
        return true;
    }



    public function changeStatusToSuspended($id)
    {
        $arr['suspended_status'] = 0;
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
        return true;
    }

    public function changeStatusToActive($id)
    {
        $arr['suspended_status'] = 1;
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
        return true;
    }
}
