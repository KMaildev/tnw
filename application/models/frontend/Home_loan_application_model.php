<?php
class Home_loan_application_model extends CI_Model {

    public function save(){
        $arr['property_type'] = $this->input->post('property_type');
        $arr['region'] = $this->input->post('region');
        $arr['township_id'] = $this->input->post('township_id');
        $arr['name'] = $this->input->post('name');
        $arr['email'] = $this->input->post('email');
        $arr['phone'] = $this->input->post('phone');
        $arr['date_of_birth'] = $this->input->post('date_of_birth');
        $arr['application_type'] = $this->input->post('application_type');
        $arr['employment_status'] = $this->input->post('employment_status');
        $arr['incomes'] = $this->input->post('incomes');
        $arr['current_location'] = $this->input->post('current_location');
        $arr['bank'] = $this->input->post('bank');
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        return $this->db->insert('home_loan_application', $arr);
    }

}
