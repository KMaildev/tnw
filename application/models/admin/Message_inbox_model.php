<?php
class Message_inbox_model extends CI_Model
{

    public function get_member_messages($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name' => $keyword));
            $this->db->or_like(array('phone' => $keyword));
            $this->db->or_like(array('email' => $keyword));
            $this->db->or_like(array('subject' => $keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select('*');
        $this->db->from('member_message');
        $this->db->where(array('user_info_id' => 0));
        $this->db->order_by("mm_id", "DESC");
        return $this->db->get()->result();
    }


    public function load_unseen_notification()
    {
        $this->db->select('*');
        $this->db->from('member_message');
        $this->db->where(array('user_info_id' => 0, 'is_read' => 'No'));
        $this->db->order_by("mm_id", "DESC");
        return $this->db->get()->num_rows();
    }


    public function ajax_call_count()
    {
        $this->db->set('ajax_call', 'ajax_call + 1', FALSE);
        $this->db->where('sv_id', 1);
        $this->db->update('site_viewer');
        return true;
    }



    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name' => $keyword));
            $this->db->or_like(array('phone' => $keyword));
            $this->db->or_like(array('email' => $keyword));
            $this->db->or_like(array('subject' => $keyword));
        }
        $this->db->where(array('user_info_id' => 0));
        return $this->db->get('member_message')->num_rows();
    }

    public function destroy($id)
    {
        $this->db->where('mm_id', $id);
        $this->db->delete('member_message');
        return true;
    }



    public function update_read_message()
    {
        $this->db->set('is_read', 'Yes');
        $this->db->update('member_message');
        return true;
    }
}
