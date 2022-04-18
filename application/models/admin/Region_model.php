<?php
class region_model extends CI_Model {

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("region");
        return $this->db->get()->result();
    }

    public function insert($data) {
        $this->db->insert('region', $data);
        return $this->db->insert_id();
    }

    public function getDataById($id) {
        $this->db->where('region_id', $id);
        return $this->db->get('region')->result();
    }

    public function update($id,$data) {
        $this->db->where('region_id', $id);
        $this->db->update('region', $data);
        return true;
    }

    public function delete($id) {
        $this->db->where('region_id', $id);
        $this->db->delete('region');
        return true;
    }
 
    public function changeStatus($id) {
        $table=$this->getDataById($id);
         if($table[0]->status==0)
         {
            $this->update($id,array('status' => '1'));
            return "Activated";
         }else{
            $this->update($id,array('status' => '0'));
            return "Deactivated";
         }
    }

}