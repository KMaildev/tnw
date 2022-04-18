<?php
class Dynamic_dependent_model extends CI_Model
{

	function fetch_township($region_id)
	{
		$this->db->where('regions_id', $region_id);
		$query = $this->db->get('townships');
		$optionsResult = $query->result();

		if(count($optionsResult) > 0){
			$output = '<select class="form-control show-tick" name="township_id" required="">';
			    foreach($optionsResult as $row){
			        $output .= '<option value="'.$row->township_id.'">'.$row->townships.'</option>';
			    }
		    $output .= '</select>';
	    }else{
	    	$output = '<select class="form-control show-tick" name="township_id" required="">';
	     	$output .= "<option value=''>Please select township</option>";
	     	$output .= '</select>';
	    }
	    return $output;
	}

	function fetch_township_member($region_id)
	{
		$this->db->where('regions_id', $region_id);
		$query = $this->db->get('townships');
		$optionsResult = $query->result();

		if(count($optionsResult) > 0){
			$output = '<select class="form-control custom" name="township_id" required="">';
				foreach($optionsResult as $row){
					$output .= '<option value="'.$row->township_id.'">'.$row->townships.'</option>';
				}
			$output .= '</select>';
		}else{
			$output = '<select class="form-control custom" name="township_id" required="">';
			$output .= "<option value=''>Please select township</option>";
			$output .= '</select>';
		}
		return $output;
	}

	function fetch_township_member_update($region_id, $township)
	{
		$lang_session = $this->session->userdata('lang'); 
		$this->db->where('regions_id', $region_id);
		$query = $this->db->get('townships');
		$optionsResult = $query->result();

		if(count($optionsResult) > 0){
			$output = '<select class="form-control custom" name="township_id" required="">';
				foreach($optionsResult as $row){
					$output .= '<option value="'.$row->township_id.'"  "'.$row->township_id == $township ? 'selected=""' : ''.'">'.$row->townships.'</option>';
				}
			$output .= '</select>';
		}else{
			$output = '<select class="form-control custom" name="township_id" required="">';
			$output .= "<option value=''>Please select township</option>";
			$output .= '</select>';
		}
		return $output;
	}

	function frontend_fetch_township($region_id)
	{
		$lang_session = $this->session->userdata('lang'); 
		$this->db->where('regions_id', $region_id);
		$query = $this->db->get('townships');
		$optionsResult = $query->result();

		if(count($optionsResult) > 0){
			$output = '<select name="township_id" required="" style="color: black;">';
			    foreach($optionsResult as $row){
			    	if ($lang_session) {
                        $output .= '<option value="'.$row->township_id.'">'.$row->townships_mm.'</option>';
                    }else{
                        $output .= '<option value="'.$row->township_id.'">'.$row->townships.'</option>';
                    }
			        
			    }
		    $output .= '</select>';
	    }else{
	    	$output = '<select name="township_id" required="" style="color: black;">';
	     	$output .= "<option value=''>Please select township</option>";
	     	$output .= '</select>';
	    }
	    return $output;
	}

}
