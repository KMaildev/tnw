<?php
class Package_model extends CI_Model
{


    public function package_order_now($data)
    {
        $arr['contact'] = $data['contact'];
        $arr['choose_payment'] = $data['choose_payment'];
        $arr['packages_id'] = $data['packages_id'];
        $arr['user_info_id'] = $data['user_info_id'];
        $arr['bank_account_id'] = $data['bank_account_id'];
        $arr['screenshot_file'] = $data['screenshot_file'];
        $arr['end_date'] = $data['end_date'];
        $arr['packagetype'] = '';
        $arr['billing_cycle'] = $data['billing_cycle'];
        $arr['order_price'] = $data['order_price'];
        $arr['other_date'] = date("F j, Y");
        $arr['order_date'] = date("Y-m-d");
        $arr['approval_status'] = '0';
        $arr['payment_status'] = $data['payment_status'];
        return $this->db->insert('package_order', $arr);
    }


    public function get_free_package()
    {
        $this->db->select_sum('no_of_posts');
        $this->db->from('packages');
        $this->db->where('packages_plan', 'free_for_agent');
        return $this->db->get()->row();
    }


    public function get_all_package()
    {
        $this->db->select('*');
        $this->db->from('packages');
        $this->db->where('packages_plan', 'business_plans');
        return $this->db->get()->result();
    }


    public function packagedetail($id)
    {
        $this->db->select('*');
        $this->db->from('packages');
        $this->db->where('package_id', $id);
        return $this->db->get()->row();
    }


    public function get_paid_package($member_id)
    {
        // $this->db->select("*");
        $this->db->select_sum('packages.no_of_posts');
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id','Left');
        $this->db->where(array('user_info_id'=> $member_id, 'approval_status'=>1));
        return $this->db->get()->row();
    }
    
    
    public function get_paid_featured_package($member_id)
    {
        // $this->db->select("*");
        $this->db->select_sum('packages.post_per_month');
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id','Left');
        $this->db->where(array('user_info_id'=> $member_id, 'approval_status'=>1));
        return $this->db->get()->row();
    }
    
    
    public function get_number_of_refresh_daily($member_id)
    {
        // $this->db->select("*");
        $this->db->select_sum('packages.refresh_daily');
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id','Left');
        $this->db->where(array('user_info_id'=> $member_id, 'approval_status'=>1));
        return $this->db->get()->row();
    }
    
    

    public function get_already_posts($member_id)
    {
        $this->db->where('user_info_id', $member_id);
        return $this->db->get('properties')->num_rows();
    }




    public function orderhistory($member_id)
    {
        // $this->db->select("*");
        $this->db->select('*');
        $this->db->from("package_order");
        $this->db->join('packages', 'package_order.packages_id = packages.package_id','Left');
        $this->db->where(array('user_info_id'=> $member_id));
        return $this->db->get()->result();
    }
}
