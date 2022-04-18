<?php
class Testimonials_model extends CI_Model
{

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');

        if ($keyword) {
            $this->db->like(array('name' => $keyword));
            $this->db->or_like(array('testimonial' => $keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("testimonials");
        $this->db->order_by("t_id ", "DESC");
        return $this->db->get()->result();
    }



    public function getAllFrontEnd()
    {
        $this->db->select("*");
        $this->db->from("testimonials");
        // $this->db->order_by("t_id ", "DESC");
        $this->db->where(array('status' => '1'));
        return $this->db->get()->result();
    }



    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('name' => $keyword));
            $this->db->or_like(array('testimonial' => $keyword));
        }
        return $this->db->get('testimonials')->num_rows();
    }


    public function save($data)
    {
        $arr['name'] = $this->input->post('name');
        $arr['company'] = $this->input->post('company');
        $arr['testimonial'] = $this->input->post('testimonial');
        $arr['city_id'] = $this->input->post('region_id');
        $arr['profile_photo'] = $data['photo'];
        $arr['status'] = 1;
        $arr['user_info_fk_id'] = 0;
        $this->db->insert('testimonials', $arr);
    }



    public function save_member_testimonials($data)
    {
        $arr['name'] = $this->input->post('name');
        $arr['company'] = $this->input->post('company');
        $arr['testimonial'] = $this->input->post('testimonial');
        $arr['city_id'] = $this->input->post('region_id');
        $arr['profile_photo'] = $data['photo'];
        $arr['status'] = 0;
        $arr['user_info_fk_id'] = $data['member_id'];
        $this->db->insert('testimonials', $arr);
    }


    public function update($data)
    {
        $arr['name'] = $this->input->post('name');
        $arr['company'] = $this->input->post('company');
        $arr['testimonial'] = $this->input->post('testimonial');
        $arr['city_id'] = $this->input->post('region_id');
        $arr['profile_photo'] = $data['photo'];
        $id = $this->input->post('t_id');
        $this->db->where('t_id', $id);
        $this->db->update('testimonials', $arr);
    }


    public function update_member_testimonials($data)
    {
        $arr['name'] = $this->input->post('name');
        $arr['company'] = $this->input->post('company');
        $arr['testimonial'] = $this->input->post('testimonial');
        $arr['city_id'] = $this->input->post('region_id');
        $arr['profile_photo'] = $data['photo'];
        $arr['status'] = 0;
        $id = $this->input->post('t_id');
        $this->db->where('t_id', $id);
        $this->db->update('testimonials', $arr);
    }


    public function find_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->where(array('t_id' => $id));
        return $this->db->get()->row();
    }


    public function find_by_region($id)
    {
        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->where(array('city_id' => $id));
        return $this->db->get()->result();
    }


    public function destroy($id)
    {
        $this->db->where('t_id', $id);
        $this->db->delete('testimonials');
        return true;
    }


    public function destroy_member_testimonials($id, $memberID)
    {
        $this->db->where(array('t_id' => $id, 'user_info_fk_id' => $memberID));
        $this->db->delete('testimonials');
        return true;
    }

    public function changeStatusActive($id)
    {
        $arr['status'] = 0;
        $this->db->where('t_id', $id);
        $this->db->update('testimonials', $arr);
        return true;
    }

    public function changeStatusInactive($id)
    {
        $arr['status'] = 1;
        $this->db->where('t_id', $id);
        $this->db->update('testimonials', $arr);
        return true;
    }
}
