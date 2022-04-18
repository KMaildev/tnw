<?php
class Member_message_model extends CI_Model
{

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');

        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->or_like(array('message' => $keyword));
            $this->db->or_like(array('subject' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("order_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("feedback.name,logo,company_name,feedback.date,subject,message,f_id,user_id");
        $this->db->from("feedback");
        $this->db->join('user_info', 'feedback.company_id = user_info.user_id', 'Left');
        $this->db->order_by("f_id", "DESC");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->or_like(array('message' => $keyword));
            $this->db->or_like(array('subject' => $keyword));
        }
        return $this->db->get('feedback')->num_rows();
    }

    public function destroy($id)
    {
        $this->db->where('f_id', $id);
        $this->db->delete('feedback');
        return true;
    }


    public function load_unseen_notification()
    {
        $this->db->select('*');
        $this->db->from('feedback');
        $this->db->where(array('is_read' => 'No'));
        return $this->db->get()->num_rows();
    }


    public function update_read_message()
    {
        $this->db->set('is_read', 'Yes');
        $this->db->update('feedback');
        return true;
    }
}
