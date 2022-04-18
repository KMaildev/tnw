<?php
class Request_inquiry_model extends CI_Model {

    public function save_member_message($data)
    {
        $arr['name'] = $data['name'];
        $arr['phone'] = $data['phone'];
        $arr['email'] = $data['email'];
        $arr['message'] = $data['description'];
        $arr['subject'] = $data['subject'];
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['user_info_id'] = $data['userId'];
        return $this->db->insert('member_message', $arr);
    }


    public function save_appointment($data)
    {
        $arr['appointment_date'] = $data['date'];
        $arr['appointment_time'] = $data['time'];
        $arr['phone_number'] = $data['phone'];
        $arr['appointment_user_info_id'] = $data['userId'];
        return $this->db->insert('appointment', $arr);
    }


    public function save_contactus($data)
    {
        $arr['name'] = $data['name'];
        $arr['phone'] = $data['phone'];
        $arr['email'] = $data['email'];
        $arr['message'] = $data['description'];
        $arr['subject'] = $data['subject'];
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['user_info_id'] = 0;
        return $this->db->insert('member_message', $arr);
    }


    public function save_suggestion($data)
    {
        $arr['name'] = $data['name'];
        $arr['phone'] = $data['phone'];
        $arr['email'] = '';
        $arr['message'] = $data['description'];
        $arr['subject'] = 'SUGGESTION';
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['user_info_id'] = 0;
        return $this->db->insert('member_message', $arr);
    }

}
