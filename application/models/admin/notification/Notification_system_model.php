<?php
class Notification_system_model extends CI_Model
{

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->like(array('title' => $keyword));
            $this->db->or_like(array('description' => $keyword));
            $this->db->or_like(array('carete_date' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("carete_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("notification");
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('title' => $keyword));
            $this->db->or_like(array('description' => $keyword));
            $this->db->or_like(array('carete_date' => $keyword));
        }
        return $this->db->get('notification')->num_rows();
    }


    public function save()
    {
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['carete_date'] = date("Y-m-d");
        $arr['upload_date'] = date("M,j,Y");
        $this->db->insert('notification', $arr);
    }


    public function update()
    {
        $arr['title'] = $this->input->post('title');
        $arr['description'] = $this->input->post('description');
        $arr['upload_date'] = date("M,j,Y");
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('notification', $arr);
    }


    public function find_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('notification');
        $this->db->where(array('id' => $id));
        return $this->db->get()->row();
    }


    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('notification');
        return true;
    }
}
