<?php
class Packages_model extends CI_Model
{


    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("packages");
        $plan = array('business_plans', 'personal_plan');
        $this->db->where_in('packages_plan', $plan);
        return $this->db->get()->result();
    }

    public function find_package($id)
    {
        $this->db->where('package_id', $id);
        return $this->db->get('packages')->row();
    }


    public function contact_me_save($data)
    {
        $arr['contact'] = $this->input->post('contact');
        $arr['choose_payment'] = $this->input->post('choose_payment');
        $arr['packages_id'] = $this->input->post('package_id');
        $arr['user_info_id'] = $data['member_id'];
        $arr['other_date'] = date("F j, Y");
        $arr['approval_status'] = '0';
        $arr['bank_account_id'] = '';
        $arr['screenshot_file'] = '';
        $arr['order_date'] = date("Y-m-d");
        $arr['end_date'] = $data['end_date'];
        $arr['packagetype'] = '';
        $arr['billing_cycle'] = $data['BillingCycle'];
        $arr['order_price'] = $data['order_price'];
        $arr['payment_status'] = $data['payment_status'];
        return $this->db->insert('package_order', $arr);
    }

    public function bank_transfer_save($data)
    {
        $arr['contact'] = $this->input->post('contact');
        $arr['choose_payment'] = $this->input->post('choose_payment');
        $arr['packages_id'] = $this->input->post('package_id');
        $arr['user_info_id'] = $data['member_id'];
        $arr['other_date'] = date("F j, Y");
        $arr['approval_status'] = '0';
        $arr['bank_account_id'] = '';
        $arr['screenshot_file'] = '';
        $arr['order_date'] = date("Y-m-d");
        $arr['end_date'] = $data['end_date'];
        $arr['packagetype'] = '';
        $arr['billing_cycle'] = $this->input->post('BillingCycle');
        $arr['order_price'] = $data['order_price'];
        $arr['bank_account_id'] = $this->input->post('bank_account_id');
        $arr['screenshot_file'] = $data['screenshot_file'];
        $arr['payment_status'] = $data['payment_status'];
        return $this->db->insert('package_order', $arr);
    }


    public function package_order_history($member_id)
    {
        $this->db->select("*");
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id', 'Left');
        $this->db->where('user_info_id', $member_id);
        return $this->db->get()->result();
    }

    public function get_my_active_packages($member_id)
    {
        $this->db->select("*");
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id', 'Left');
        $this->db->where(array('user_info_id' => $member_id, 'approval_status' => 1));
        return $this->db->get()->result();
    }


    public function active_package_for_wanted($member_id)
    {
        $this->db->select("*");
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id', 'Left');
        $this->db->where(array('user_info_id' => $member_id, 'packages_plan' => 'business_plans', 'approval_status' => 1));
        return $this->db->get()->result();
    }
}
