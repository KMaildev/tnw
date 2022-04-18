<?php
class Buyourservices_model extends CI_Model {

	public function get_packages()
	{
		$this->db->select("*");
		$this->db->from("packages");
		return $this->db->get()->result();
	}


	public function save_get_package_user(){
        $arr['email'] = $this->input->post('email');
        $arr['phone'] = $this->input->post('phone');
        $arr['get_date'] = date("F j, Y");
        $this->db->insert('get_package_user', $arr);
    }


}
