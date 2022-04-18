<?php
class Admin_list_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("admin");
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
        }
        return $this->db->get('admin')->num_rows();
    }


    public function save($data){
        $arr['name'] = $data['name'];
        $arr['email'] = $data['email'];
        $arr['password'] = $data['password'];
        $arr['role'] = "Admin";
        $this->db->insert('admin', $arr);
    }

    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array('id'=>$id));
        return $this->db->get()->row();
    }

    public function update($data){
        $arr['name'] = $data['name'];
        $arr['email'] = $data['email'];
        $arr['password'] = $data['password'];
        $arr['role'] = "Admin";
        $id = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
        return true;
    }

}