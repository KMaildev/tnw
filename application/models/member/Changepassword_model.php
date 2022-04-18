<?php
class Changepassword_model extends CI_Model {

	public function change_password($data){
		$arr['password'] = md5($this->input->post('password'));
		$id = $data['member_id'];
		$this->db->where('user_id', $id);
		$this->db->update('user_info', $arr);
	}

}
