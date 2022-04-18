<?php
class Event_booking_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('created_date'=>$keyword));
        }

        $this->db->select("*");
        $this->db->from("event_booking");
        $this->db->join('events', 'event_booking.event_id = events.e_id ','Left');
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
           $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('created_date'=>$keyword));
        }
        return $this->db->get('event_booking')->num_rows();
    }


    public function destroy($id) {
        $this->db->where('ev_id ', $id);
        $this->db->delete('event_booking');
        return true;
    }

}