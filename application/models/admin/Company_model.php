<?php
class Company_model extends CI_Model {

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("company");
        $this->db->where('company_id', 1);
        return $this->db->get()->row();
    }

    public function insert($data){
        $insert_data['company_name'] = $data['company_name'];
        $insert_data['address'] = $data['address'];
        $insert_data['phone'] = $data['phone'];
        $insert_data['email'] = $data['email'];
        $insert_data['logo'] = $data['logo'];
        $insert_data['admin_id'] = $data['admin_id'];
        $insert_data['status'] = $data['status'];
        $query = $this->db->insert('company', $insert_data);
    }


    public function getDataById($id) {
        $this->db->where('property_type_id', $id);
        return $this->db->get('property_type')->result();
    }

    public function get_by_company_data() {
        $this->db->select('*');
        $this->db->from('company');
        $this->db->where(array('company_id'=>1));
        return $this->db->get()->row();
    }

    public function update($data) {
        $data['company_name'] = $data['company_name'];
        $data['address'] = $data['address'];
        $data['phone'] = $data['phone'];
        $data['email'] = $data['email'];
        $data['logo'] = $data['logo'];
        $data['status'] = $data['status'];
        $data['admin_id'] = $data['admin_id'];
        $id = $data['company_id'];
        $this->db->where('company_id', $id);
        $this->db->update('company', $data);
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
