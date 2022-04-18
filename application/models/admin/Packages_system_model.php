<?php
class Packages_system_model extends CI_Model
{

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('package_name' => $keyword));
            $this->db->or_like(array('no_of_posts' => $keyword));
            $this->db->or_like(array('duration' => $keyword));
            $this->db->or_like(array('price' => $keyword));
        }

        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("packages");
        $this->db->order_by("package_id ", "DESC");
        return $this->db->get()->result();
    }

    public function get_package()
    {
        $this->db->select("*");
        $this->db->from("packages");
        return $this->db->get()->result();
    }



    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('package_name' => $keyword));
            $this->db->or_like(array('no_of_posts' => $keyword));
            $this->db->or_like(array('duration' => $keyword));
            $this->db->or_like(array('price' => $keyword));
        }
        return $this->db->get('packages')->num_rows();
    }

    public function save()
    {

        $arr['video_clip'] = $this->input->post('video_clip');
        $arr['facebook_ads'] = $this->input->post('facebook_ads');


        $arr['package_name'] = $this->input->post('package_name');
        $arr['no_of_posts'] = $this->input->post('no_of_posts');
        $arr['post_per_month'] = $this->input->post('post_per_month');
        $arr['refresh_per_month'] = $this->input->post('refresh_per_month');
        $arr['refresh_daily'] = $this->input->post('refresh_daily');
        $arr['website_helpful_ad'] = $this->input->post('website_helpful_ad') ?: 'No';
        $arr['website_special_ad'] = $this->input->post('website_special_ad') ?: 'No';
        $arr['duration'] = $this->input->post('duration');
        $arr['price'] = $this->input->post('price');
        $arr['discount'] = $this->input->post('discount');

        $arr['six_month_discount'] = $this->input->post('six_month_discount');

        $arr['packages_plan'] = $this->input->post('packages_plan'); //$this->input->post('packages_plan');
        $arr['carete_date'] = date("Y-m-d");
        $arr['status'] = 1;

        $this->db->insert('packages', $arr);
    }



    public function find_by_id($id)
    {
        $this->db->where('package_id', $id);
        return $this->db->get('packages')->row();
    }



    public function update()
    {

        $arr['video_clip'] = $this->input->post('video_clip');
        $arr['facebook_ads'] = $this->input->post('facebook_ads');

        $arr['package_name'] = $this->input->post('package_name');
        $arr['no_of_posts'] = $this->input->post('no_of_posts');
        $arr['post_per_month'] = $this->input->post('post_per_month');
        $arr['refresh_per_month'] = $this->input->post('refresh_per_month');
        $arr['refresh_daily'] = $this->input->post('refresh_daily');
        $arr['website_helpful_ad'] = $this->input->post('website_helpful_ad') ?: 'No';
        $arr['website_special_ad'] = $this->input->post('website_special_ad') ?: 'No';
        $arr['duration'] = $this->input->post('duration');
        $arr['price'] = $this->input->post('price');
        $arr['discount'] = $this->input->post('discount');

        $arr['six_month_discount'] = $this->input->post('six_month_discount');

        $arr['packages_plan'] = $this->input->post('packages_plan');
        $arr['carete_date'] = date("Y-m-d");
        $arr['status'] = 1;

        $id = $this->input->post('package_id');
        $this->db->where('package_id', $id);
        $this->db->update('packages', $arr);
        return true;
    }


    public function destroy($id)
    {
        $this->db->where('package_id', $id);
        $this->db->delete('packages');
        return true;
    }
}
