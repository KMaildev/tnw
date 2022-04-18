<?php

class Appointment_model extends CI_Model
{
    public function save()
    {
        $arr['appointment_date'] = $this->input->post('appointment_date');
        $arr['appointment_time'] = $this->input->post('appointment_time');
        $arr['phone_number'] = $this->input->post('phone_number');
        $arr['appointment_user_info_id'] = $this->input->post('appointment_user_info_id');
        return $this->db->insert('appointment', $arr);
    }
}
