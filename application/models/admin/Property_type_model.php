<?php
class Property_type_model extends CI_Model {

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("property_type");
        return $this->db->get()->result();
    }

    public function insert($data) {
        $this->db->insert('property_type', $data);
        return $this->db->insert_id();
    }

    public function getDataById($id) {
        $this->db->where('property_type_id', $id);
        return $this->db->get('property_type')->result();
    }

    public function update($id,$data) {
        $this->db->where('property_type_id', $id);
        $this->db->update('property_type', $data);
        return true;
    }

    public function delete($id) {
        $this->db->where('property_type_id', $id);
        $this->db->delete('property_type');
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