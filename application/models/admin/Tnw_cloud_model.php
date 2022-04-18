<?php
class Tnw_cloud_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("folder");
        $this->db->where(array('users_status_info'=> 'tatnaywon', 'users_info_id'=> 0));
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $this->db->where(array('users_status_info'=> 'tatnaywon', 'users_info_id'=> 0));
        return $this->db->get('folder')->num_rows();
    }

    public function insert() {
        $arr['folder_name'] = $this->input->post('folder_name');
        $arr['status'] = 1;
        $arr['users_status_info'] = 'tatnaywon';
        $arr['users_info_id'] = 0;
        $arr['careted_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $this->db->insert('folder', $arr);
    }


    public function my_data_detail($id)
    {
        $this->db->select("*");
        $this->db->from("folder");
        $this->db->where(array('users_status_info'=> 'tatnaywon', 'users_info_id'=> 0, 'folder_id'=> $id));
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