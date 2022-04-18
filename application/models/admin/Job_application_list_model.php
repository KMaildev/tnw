<?php
class Job_application_list_model extends CI_Model {

    public function getAll($limit, $offset) {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select('*');
        $this->db->from('apply_jobs');
        $this->db->order_by("aj_id ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
        }
        return $this->db->get('apply_jobs')->num_rows();
    }

    public function destory($id) {
        $this->db->where('aj_id', $id);
        $this->db->delete('apply_jobs');
        return true;
    }

}
