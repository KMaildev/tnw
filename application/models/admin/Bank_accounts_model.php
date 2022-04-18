<?php
class Bank_accounts_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');

        if ($keyword) {
            $this->db->like(array('bank_name'=>$keyword));
            $this->db->or_like(array('account_name'=>$keyword));
            $this->db->or_like(array('account_number'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("bank_accounts");
        $this->db->order_by("bank_id ", "DESC");
        return $this->db->get()->result();
    }

    public function get_bank_account()
    {
        $this->db->select("*");
        $this->db->from("bank_accounts");
        $this->db->order_by("bank_id ", "DESC");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('bank_name'=>$keyword));
            $this->db->or_like(array('account_name'=>$keyword));
            $this->db->or_like(array('account_number'=>$keyword));
        }
        return $this->db->get('bank_accounts')->num_rows();
    }

    public function save(){
        $arr['bank_name'] = $this->input->post('bank_name');
        $arr['account_name'] = $this->input->post('account_name');
        $arr['account_number'] = $this->input->post('account_number');
        $arr['carete_date'] = date("Y-m-d");
        $this->db->insert('bank_accounts', $arr);
    }

    public function find_by_id($id) {
        $this->db->where('bank_id', $id);
        return $this->db->get('bank_accounts')->row();
    }


    public function update(){
        $arr['bank_name'] = $this->input->post('bank_name');
        $arr['account_name'] = $this->input->post('account_name');
        $arr['account_number'] = $this->input->post('account_number');
        $id = $this->input->post('bank_id');
        $arr['carete_date'] = date("Y-m-d");
        $this->db->where('bank_id', $id);
        $this->db->update('bank_accounts', $arr);
        return true;
    }

 
    public function destroy($id) {
        $this->db->where('bank_id', $id);
        $this->db->delete('bank_accounts');
        return true;
    }

   

}