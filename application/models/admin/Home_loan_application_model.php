<?php
class Home_loan_application_model extends CI_Model {

    public function getAll($limit, $offset) {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
            $this->db->or_like(array('property_type'=>$keyword));
            $this->db->or_like(array('date_of_birth'=>$keyword));
            $this->db->or_like(array('application_type'=>$keyword));
            $this->db->or_like(array('employment_status'=>$keyword));
            $this->db->or_like(array('incomes'=>$keyword));
            $this->db->or_like(array('current_location'=>$keyword));
            $this->db->or_like(array('bank'=>$keyword));
            $this->db->or_like(array('date'=>$keyword));
            $this->db->or_like(array('other_date'=>$keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select('*');
        $this->db->from('home_loan_application');
        $this->db->join('region', 'home_loan_application.region = region.region_id','Left');
        $this->db->join('townships', 'home_loan_application.township_id = townships.township_id ','Left');
        $this->db->order_by("h_id  ", "DESC");
        return $this->db->get()->result();
    }


    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name'=>$keyword));
            $this->db->or_like(array('phone'=>$keyword));
            $this->db->or_like(array('email'=>$keyword));
            $this->db->or_like(array('property_type'=>$keyword));
            $this->db->or_like(array('date_of_birth'=>$keyword));
            $this->db->or_like(array('application_type'=>$keyword));
            $this->db->or_like(array('employment_status'=>$keyword));
            $this->db->or_like(array('incomes'=>$keyword));
            $this->db->or_like(array('current_location'=>$keyword));
            $this->db->or_like(array('bank'=>$keyword));
            $this->db->or_like(array('date'=>$keyword));
            $this->db->or_like(array('other_date'=>$keyword));
        }
        return $this->db->get('home_loan_application')->num_rows();
    }

    public function destroy($id) {
        $this->db->where('h_id', $id);
        $this->db->delete('home_loan_application');
        return true;
    }

}
