<?php
class My_ads_model extends CI_Model
{

	public function ger_all_data($arr_data, $limit, $offset)
	{
		$member_id = $arr_data['member_id'];
		$propertie_type = $arr_data['propertie_type'];

		$keyword = $this->input->get('keyword');
		$from = $this->input->get('from');
		$to = $this->input->get('to');

		if ($keyword) {
			$this->db->like(array('ad_number' => $keyword));
			$this->db->or_like(array('title_eng' => $keyword));
			$this->db->or_like(array('title_mm' => $keyword));
		}

		if ($from && $to) {
			$this->db->where("carete_date BETWEEN '$from' AND '$to'");
		}

		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->select("*");
		$this->db->from("properties");
		$this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
		$this->db->join('region', 'properties.region_id = region.region_id', 'Left');
		$this->db->where(array('propertie_type' => $propertie_type, 'user_info_id' => $member_id, 'soldout_status' => 0));
		$this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');
		$this->db->group_by("sale_id");
		return $this->db->get()->result();
	}

	public function count_all($arr_data)
	{
		$member_id = $arr_data['member_id'];
		$propertie_type = $arr_data['propertie_type'];

		$keyword = $this->input->get('keyword');
		if ($keyword) {
			$this->db->like(array('ad_number' => $keyword));
			$this->db->or_like(array('title_eng' => $keyword));
		}
		$this->db->where(array('propertie_type' => $propertie_type, 'user_info_id' => $member_id, 'soldout_status' => 0));
		return $this->db->get('properties')->num_rows();
	}


	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->join('region', 'properties.region_id = region.region_id', 'Left');
		$this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
		$this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
		$this->db->join('user_info', 'properties.user_info_id = user_info.user_id ', 'Left');
		$this->db->where(array('sale_id' => $id));
		return $this->db->get()->row();
	}


	public function getDataByPhoto($id)
	{
		$this->db->select('*');
		$this->db->from('propertie_photo');
		$this->db->where(array('properties_id' => $id));
		return $this->db->get()->result();
	}


	public function destroy_properties($id)
	{
		$this->db->where('sale_id', $id);
		$this->db->delete('properties');
		return true;
	}

	public function destroy_photo($id)
	{
		$this->db->where('properties_id', $id);
		$this->db->delete('propertie_photo');
		return true;
	}

	public function soldout_status_change($id)
	{
		$arr['soldout_status'] = 1;
		$this->db->where('sale_id', $id);
		$this->db->update('properties', $arr);
		return true;
	}

	public function soldout_status_un_soldout($id)
	{
		$arr['soldout_status'] = 0;
		$this->db->where('sale_id', $id);
		$this->db->update('properties', $arr);
		return true;
	}
}
