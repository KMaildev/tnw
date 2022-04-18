<?php
class Townships_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('townships');
        $this->db->join('region', 'townships.regions_id = region.region_id','Left');
        return $this->db->get()->result();
    }

    public function insert($data) {
        $this->db->insert('townships', $data);
        return $this->db->insert_id();
    }

    public function getDataById($id) {
        $this->db->where('township_id', $id);
        return $this->db->get('townships')->result();
    }

    public function update($id,$data) {
        $this->db->where('township_id', $id);
        $this->db->update('townships', $data);
        return true;
    }

    public function delete($id) {
        $this->db->where('township_id', $id);
        $this->db->delete('townships');
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