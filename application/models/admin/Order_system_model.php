<?php
class Order_system_model extends CI_Model
{

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');

        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->like(array('contact' => $keyword));
            $this->db->or_like(array('order_date' => $keyword));
            $this->db->or_like(array('other_date' => $keyword));
        }

        if ($from && $to) {
            $this->db->where("order_date BETWEEN '$from' AND '$to'");
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id', 'Left');
        $this->db->join('bank_accounts', 'package_order.bank_account_id = bank_accounts.bank_id', 'Left');
        $this->db->join('user_info', 'package_order.user_info_id = user_info.user_id', 'Left');
        $this->db->order_by("po_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('contact' => $keyword));
            $this->db->or_like(array('order_date' => $keyword));
            $this->db->or_like(array('other_date' => $keyword));
        }
        return $this->db->get('package_order')->num_rows();
    }

    public function activate_now($id)
    {
        $arr['approval_status'] = 1;
        $this->db->where('po_id', $id);
        $this->db->update('package_order', $arr);
        return true;
    }


    public function pending_now($id)
    {
        $arr['approval_status'] = 0;
        $this->db->where('po_id', $id);
        $this->db->update('package_order', $arr);
        return true;
    }
}
