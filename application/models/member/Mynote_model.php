<?php
class mynote_model extends CI_Model {

    public function getAll($data_arr, $limit, $offset) {

        $member_id = $data_arr['member_id'];

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
        $this->db->where(array('users_info_id'=> $member_id, 'users_info_status'=> 'other_company'));
        $this->db->order_by("np_id ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all($data_arr)
    {
        $member_id = $data_arr['member_id'];
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('title'=>$keyword));
            $this->db->or_like(array('created_date'=>$keyword));
            $this->db->or_like(array('description'=>$keyword));
        }
        $this->db->where(array('users_info_id'=> $member_id, 'users_info_status'=> 'other_company'));
        return $this->db->get('node_pad')->num_rows();
    }

    public function save($data_arr){
        $member_id = $data_arr['member_id'];
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['status'] = 1;
        $arr['created_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['users_info_id'] = $member_id;
        $arr['users_info_status'] = 'other_company';
        $this->db->insert('node_pad', $arr);
    }

    public function destroy($id) {
        $this->db->where('np_id', $id);
        $this->db->delete('node_pad');
        return true;
    }


    public function update(){
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['status'] = 1;
        $arr['created_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
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
