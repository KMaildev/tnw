<?php
class Events_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($keyword) {
            $this->db->like(array('title'=>$keyword));
            $this->db->or_like(array('location'=>$keyword));
            $this->db->or_like(array('description_eng'=>$keyword));
            $this->db->or_like(array('description_mm'=>$keyword));
        }

        if ($from && $to) {
            $this->db->where("created_date BETWEEN '$from' AND '$to'");
        }

        $this->db->select("*");
        $this->db->from("events");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('title'=>$keyword));
            $this->db->or_like(array('location'=>$keyword));
            $this->db->or_like(array('description_eng'=>$keyword));
            $this->db->or_like(array('description_mm'=>$keyword));
        }
        return $this->db->get('events')->num_rows();
    }

    public function save($data){
        $arr['title'] = $this->input->post('title');
        $arr['e_date'] = $this->input->post('e_date');
        $arr['e_time'] = $this->input->post('e_time');
        $arr['location'] = $this->input->post('location');
        $arr['description_eng'] = $this->input->post('description_eng');
        $arr['description_mm'] = $this->input->post('description_mm');
        $arr['created_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['photo'] = $data['photo'];
        $arr['video'] = $data['video'];
        $query = $this->db->insert('events', $arr);
    }

    public function update($data){
       $arr['title'] = $this->input->post('title');
        $arr['e_date'] = $this->input->post('e_date');
        $arr['e_time'] = $this->input->post('e_time');
        $arr['location'] = $this->input->post('location');
        $arr['description_eng'] = $this->input->post('description_eng');
        $arr['description_mm'] = $this->input->post('description_mm');
        $arr['created_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        
        $id = $this->input->post('e_id');

        $arr['photo'] = $data['photo'];
        $arr['video'] = $data['video'];

        $this->db->where('e_id', $id);
        $this->db->update('events', $arr);
        return true;
    }

    public function find_by_id($id) {
        $this->db->where('e_id', $id);
        return $this->db->get('events')->row();
    }

    public function destroy($id) {
        $this->db->where('e_id', $id);
        $this->db->delete('events');
        return true;
    }

}