<?php
class events_book_model extends CI_Model {

    public function event_book_now(){
        $arr['name'] = $this->input->post('name');
        $arr['phone'] = $this->input->post('phone');
        $arr['email'] = $this->input->post('email');
        $arr['created_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['event_id'] = $this->input->post('event_id');
        $query = $this->db->insert('event_booking', $arr);
    }


}