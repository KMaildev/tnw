<?php
class Auth_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    public function getAll($email, $password)
    {
        $this->db->select("*");
        $this->db->from("user_info");
        $this->db->where(array('suspended_status'=> 1, 'email'=> $email, 'password'=> md5($password)));
        return $this->db->get()->row();
    }


    public function auth_check($data)
    {
        $query = $this->db->get_where('user_info', $data);
        if($query){
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
        $arr['package_id'] = 1;
        $arr['carete_date'] = date("Y-m-d");
        $arr['phone'] = $data['phone_no'];
        $arr['address'] = $data['address'];
        $arr['description'] = $data['description'];
        $arr['user_permissions'] = $data['user_permissions'];
        $arr['company_type'] = $data['company_type'];
        $this->db->insert('user_info', $arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function latest_auth_check($insert_id)
    {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where(array('user_id'=> $insert_id));
        return $this->db->get()->row();
    }


    public function latest_auth_check_update($userId)
    {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where(array('user_id'=> $userId));
        return $this->db->get()->row();
    }
    

    public function checkEmail($email)
    {
        $this->db->where('email', $email);
        $result = $this->db->get('user_info');

        if($result->num_rows() > 0){
            /*
             * the email already exists
            */
            return false;
        }else{
            return true;
        }
    }



    public function ChangePassword($data)
    {
        $userId = $data['user_id'];
        $arr['password'] = $data['password'];
        $this->db->where('user_id', $userId);
        return $this->db->update('user_info', $arr);
    }



    public function UpdateAccount($data)
    {
        $arr['name'] = $data['name'];
        $arr['company_name'] = $data['company_name'];
        $arr['phone'] = $data['phone_no'];
        $arr['address'] = $data['address'];
        $arr['description'] = $data['description'];
        $arr['user_permissions'] = $data['user_permissions'];
        $arr['company_type'] = $data['company_type'];
        $id = $data['userId'];
        $this->db->where('user_id', $id);
        $this->db->update('user_info', $arr);
    }




    public function deleteLogo($data)
    {
        $userId = $data['user_id'];
        $arr['logo'] = '';
        $this->db->where('user_id', $userId);
        return $this->db->update('user_info', $arr);
    }

}
