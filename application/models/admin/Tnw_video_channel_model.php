<?php
class tnw_video_channel_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('title'=>$keyword));
            $this->db->or_like(array('description'=>$keyword));
            $this->db->or_like(array('carete_date'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("tnw_video_channel");
        $this->db->order_by("vc_id", "DESC");
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
        return $this->db->get('tnw_video_channel')->num_rows();
    }

    public function save($data){
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['video'] = $data['video'];
		$arr['admin_id'] = $this->input->post('admin_id');
        $arr['status'] = 1;
        $arr['carete_date'] = date("Y-m-d");
        $arr['upload_date'] = date("F j, Y");
        $this->db->insert('tnw_video_channel', $arr);
    }


    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('tnw_video_channel');
        $this->db->where(array('vc_id'=> $id));
        return $this->db->get()->row();
    }


    public function destroy_video($id) {
        $this->db->where('vc_id', $id);
        $this->db->delete('tnw_video_channel');
        return true;
    }

}
