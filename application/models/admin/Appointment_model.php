<?php
class Appointment_model extends CI_Model
{

    public function getAll($user_info_id = 0, $limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('appointment_date' => $keyword));
            $this->db->or_like(array('appointment_time' => $keyword));
            $this->db->or_like(array('phone_number' => $keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select('*');
        $this->db->from('appointment');
        $this->db->where(array('appointment_user_info_id' => $user_info_id));
        $this->db->order_by("appointment.id", "DESC");
        return $this->db->get()->result();
    }


    public function count_all($user_info_id = 0)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('appointment_date' => $keyword));
            $this->db->or_like(array('appointment_time' => $keyword));
            $this->db->or_like(array('phone_number' => $keyword));
        }

        $this->db->select('*');
        $this->db->from('appointment');
        $this->db->where(array('appointment_user_info_id' => $user_info_id));
        return $this->db->get()->num_rows();
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('appointment');
        return true;
    }
}