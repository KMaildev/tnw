<?php
class Datacheck_model extends CI_Model
{

	public function email_check($data)
	{
		$query = $this->db->get_where('user_info', $data);
		if ($query) {
			return $query->row();
		}
		return false;
	}


	public function email_check_already($data)
	{
		$query = $this->db->get_where('user_info', $data);
		if ($query) {
			return $query->row();
		}
		return false;
	}


	public function email_check_already_admin($data)
	{
		$query = $this->db->get_where('admin', $data);
		if ($query) {
			return $query->row();
		}
		return false;
	}


	public function email_check_admin($data)
	{
		$query = $this->db->get_where('admin', $data);
		if ($query) {
			return $query->row();
		}
		return false;
	}
}
