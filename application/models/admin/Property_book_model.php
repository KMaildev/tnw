<?php
class Property_book_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->like(array('title'=>$keyword));
            $this->db->or_like(array('description'=>$keyword));
            $this->db->or_like(array('carete_date'=>$keyword));
        }

        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("property_book");
        $this->db->order_by("pb_id ", "DESC");
        return $this->db->get()->result();
    }

    public function recent_book()
    {
        $this->db->select("*");
        $this->db->from("property_book");
        $this->db->order_by("pb_id ", "ASC");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
          $this->db->like(array('title'=>$keyword));
          $this->db->or_like(array('description'=>$keyword));
          $this->db->or_like(array('carete_date'=>$keyword));
        }
        return $this->db->get('property_book')->num_rows();
    }

    public function save($data){
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['photo'] = $data['photo'];
		$arr['admin_id'] = $this->input->post('admin_id');
        $arr['status'] = 1;
        $arr['carete_date'] = date("Y-m-d");
        $arr['upload_date'] = date("F j, Y");
        $this->db->insert('property_book', $arr);
    }


    public function update($data){
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['photo'] = $data['photo'];
        $arr['admin_id'] = $this->input->post('admin_id');
        $arr['upload_date'] = date("F j, Y");
        $id = $this->input->post('pb_id');
        $this->db->where('pb_id', $id);
        $this->db->update('property_book', $arr);
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('property_book');
        $this->db->where(array('pb_id'=> $id));
        return $this->db->get()->row();
    }


    public function destroy($id) {
        $this->db->where('pb_id', $id);
        $this->db->delete('property_book');
        return true;
    }

    public function changeStatusActive($id) {
        $arr['status'] = 0;
        $this->db->where('pb_id', $id);
        $this->db->update('property_book', $arr);
        return true;
    }

    public function changeStatusInactive($id) {
        $arr['status'] = 1;
        $this->db->where('pb_id', $id);
        $this->db->update('property_book', $arr);
        return true;
    }



}
