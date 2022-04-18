<?php
class Feedback_model extends CI_Model {

    public function save($data){
        $arr['name'] = $this->input->post('name');
        $arr['subject'] = $this->input->post('subject');
        $arr['message'] = $this->input->post('description');
        $arr['company_id'] = $data['member_id'];
        $arr['date'] = date("Y/m/d");
        $query = $this->db->insert('feedback', $arr);
    }


}
