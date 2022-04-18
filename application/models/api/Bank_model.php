<?php
class Bank_model extends CI_Model {

    public function getAllBanks()
    {
        $this->db->select("*");
        $this->db->from("bank_accounts");
        return $this->db->get()->result();
    }
}
