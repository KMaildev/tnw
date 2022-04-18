<?php

class Homeloanapplication_model extends CI_Model {

    public function save_home_loan_application($data)
    {
        $arr['property_type'] = $data['property_type_id'];
        $arr['region'] = $data['region_id'];
        $arr['township_id'] = $data['township_id'];
        $arr['name'] = $data['name'];
        $arr['email'] = $data['email'];
        $arr['phone'] = $data['phone'];
        $arr['date_of_birth'] = $data['date_of_birth'];
        $arr['application_type'] = $data['homeloan_application_type'];
        $arr['employment_status'] = $data['employment_status'];
        $arr['incomes'] = $data['monthly_income_status'];
        $arr['current_location'] = $data['current_address'];
        $arr['bank'] = $data['bank_type'];
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        return $this->db->insert('home_loan_application', $arr);
    }

}
