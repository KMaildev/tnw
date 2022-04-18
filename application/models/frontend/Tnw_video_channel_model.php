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

    public function find_by_id($id) {
        $this->db->select('*');
        $this->db->from('tnw_video_channel');
        $this->db->where(array('vc_id'=> $id));
        return $this->db->get()->row();
    }

    public function recent_video()
    {
        $this->db->select("*");
        $this->db->from("tnw_video_channel");
        $this->db->order_by("vc_id", "DESC");
        return $this->db->get()->result();
    }


}
