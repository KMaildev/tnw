<?php
class Note_model extends CI_Model {

    public function getAll($limit, $offset) {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('title'=>$keyword));
            $this->db->or_like(array('created_date'=>$keyword));
            $this->db->or_like(array('description'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select('*');
        $this->db->from('node_pad');
        $this->db->where(array('users_info_id'=> 0, 'users_info_status'=> 'tatnaywon'));
        $this->db->order_by("np_id ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('title'=>$keyword));
            $this->db->or_like(array('created_date'=>$keyword));
            $this->db->or_like(array('description'=>$keyword));
        }
        $this->db->where(array('users_info_id'=> 0, 'users_info_status'=> 'tatnaywon'));
        return $this->db->get('node_pad')->num_rows();
    }

    public function save(){
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['status'] = 1;
        $arr['created_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['users_info_id'] = 0;
        $arr['users_info_status'] = 'tatnaywon';
        $this->db->insert('node_pad', $arr);
    }

    public function destroy($id) {
        $this->db->where('np_id', $id);
        $this->db->delete('node_pad');
        return true;
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('node_pad');
        $this->db->where(array('np_id'=> $id));
        return $this->db->get()->row();
    }

    public function update(){
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['status'] = 1;
        $arr['created_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['users_info_id'] = 0;
        $arr['users_info_status'] = 'tatnaywon';
        $id = $this->input->post('note_id');
        $this->db->where('np_id', $id);
        $this->db->update('node_pad', $arr);
    }

    public function changeStatusActive($id) {
        $arr['status'] = 0;
        $this->db->where('np_id', $id);
        $this->db->update('node_pad', $arr);
        return true;
    }

    public function changeStatusInactive($id) {
        $arr['status'] = 1;
        $this->db->where('np_id', $id);
        $this->db->update('node_pad', $arr);
        return true;
    }

}
