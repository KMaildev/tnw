<?php
class Login_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function auth_check($data)
    {
        $query = $this->db->get_where('user_info', $data);
        if ($query) {
            return $query->row();
        }
        return false;
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

        $this->db->insert('user_info', $arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function latest_auth_check($insert_id)
    {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where(array('user_id' => $insert_id));
        return $this->db->get()->row();
    }
}
