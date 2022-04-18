<?php
class Dashboard_model extends CI_Model
{

	public function get_package($get_packages_plan)
	{
		$this->db->where('packages_plan', 'free_for_agent');
		return $this->db->get('packages')->row();
	}

	public function get_already_posts($member_id)
	{
		$this->db->where('user_info_id', $member_id);
		return $this->db->get('properties')->num_rows();
	}
}
