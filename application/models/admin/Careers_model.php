<?php
class Careers_model extends CI_Model {

    public function getAll($limit, $offset)
    {
        $keyword = $this->input->get('keyword');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        if ($keyword) {
            $this->db->like(array('position'=>$keyword));
            $this->db->or_like(array('experience_level'=>$keyword));
            $this->db->or_like(array('salary'=>$keyword));
            $this->db->or_like(array('job_location'=>$keyword));
        }

        if ($from && $to) {
            $this->db->where("create_date BETWEEN '$from' AND '$to'");
        }

        $this->db->select("*");
        $this->db->from("careers");
        return $this->db->get()->result();
    }

    public function count_all()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $this->db->like(array('position'=>$keyword));
            $this->db->or_like(array('experience_level'=>$keyword));
            $this->db->or_like(array('salary'=>$keyword));
            $this->db->or_like(array('job_location'=>$keyword));
        }
        return $this->db->get('careers')->num_rows();
    }

    public function save(){
        $arr['position'] = $this->input->post('position');
        $arr['experience_level'] = $this->input->post('experience_level');
        $arr['salary'] = $this->input->post('salary');
        $arr['job_location'] = $this->input->post('job_location');
        $arr['job_description'] = $this->input->post('job_description');
        $arr['job_requirements'] = $this->input->post('job_requirements');
        $arr['about_our_company'] = $this->input->post('about_our_company');
        $arr['male_total'] = $this->input->post('male_total');
        $arr['female_total'] = $this->input->post('female_total');
        $arr['create_date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $query = $this->db->insert('careers', $arr);
    }

    public function update(){
        $arr['position'] = $this->input->post('position');
        $arr['experience_level'] = $this->input->post('experience_level');
        $arr['salary'] = $this->input->post('salary');
        $arr['job_location'] = $this->input->post('job_location');
        $arr['job_description'] = $this->input->post('job_description');
        $arr['job_requirements'] = $this->input->post('job_requirements');
        $arr['about_our_company'] = $this->input->post('about_our_company');
        $arr['male_total'] = $this->input->post('male_total');
        $arr['female_total'] = $this->input->post('female_total');
        $id = $this->input->post('c_id');

        $this->db->where('c_id', $id);
        $this->db->update('careers', $arr);
        return true;
    }

    public function find_by_id($id) {
        $this->db->where('c_id', $id);
        return $this->db->get('careers')->row();
    }

    public function destroy($id) {
        $this->db->where('c_id', $id);
        $this->db->delete('careers');
        return true;
    }

}