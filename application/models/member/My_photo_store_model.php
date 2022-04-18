<?php
class My_photo_store_model extends CI_Model {

    public function getAll($data_arr, $limit, $offset)
    {
        $member_id = $data_arr['member_id'];

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("folder");
        $this->db->where(array('users_status_info'=> 'other_company', 'users_info_id'=> $member_id));
        return $this->db->get()->result();
    }

    public function count_all($data_arr)
    {
        $member_id = $data_arr['member_id'];
        $this->db->where(array('users_status_info'=> 'other_company', 'users_info_id'=> $member_id));
        return $this->db->get('folder')->num_rows();
    }

    public function insert($data_arr) {
        $arr['folder_name'] = $this->input->post('folder_name');
        $arr['status'] = 1;
        $arr['users_status_info'] = 'other_company';
        $arr['users_info_id'] = $data_arr['member_id'];;
        $arr['careted_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $this->db->insert('folder', $arr);
    }


    public function my_data_detail($id, $data_arr)
    {
        $member_id = $data_arr['member_id'];
        $this->db->select("*");
        $this->db->from("folder");
        $this->db->where(array('users_status_info'=> 'other_company', 'users_info_id'=> $member_id, 'folder_id'=> $id));
        return $this->db->get()->row();
    }


    public function my_data_get_photo($id)
    {
        $this->db->select("*");
        $this->db->from("tnw_cloud_photo");
        $this->db->where(array('folders_id'=> $id));
        return $this->db->get()->result();
    }

    public function destroy_photo($id) {
        $this->db->where('tcp_id', $id);
        $this->db->delete('tnw_cloud_photo');
        return true;
    }

    public function destroy_folder_photo($id) {
        $this->db->where('folder_id', $id);
        $this->db->delete('folder');
        return true;
    }

    public function destroy_all_photo($id) {
        $this->db->where('folders_id', $id);
        $this->db->delete('tnw_cloud_photo');
        return true;
    }
 

}