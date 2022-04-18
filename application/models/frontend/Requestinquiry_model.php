<?php
class Requestinquiry_model extends CI_Model
{

    public function tatnaywon_for_save()
    {

        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $message = $this->input->post('message');
        $subject = $this->input->post('subject');
        $this->sendMail($name, $phone, $email, $message, $subject);




        $arr['name'] = $this->input->post('name');
        $arr['phone'] = $this->input->post('phone');
        $arr['email'] = $this->input->post('email');
        $arr['message'] = $this->input->post('message');
        $arr['subject'] = $this->input->post('subject');
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['user_info_id'] = 0;
        $query = $this->db->insert('member_message', $arr);
        return $query;
    }


    public function save_suggestion()
    {

        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $message = $this->input->post('message');
        $subject = 'SUGGESTION';
        $this->sendMail($name, $phone, $email, $message, $subject);


        $arr['name'] = $this->input->post('name');
        $arr['phone'] = $this->input->post('phone');
        $arr['email'] = "No Email";
        $arr['message'] = $this->input->post('message');
        $arr['subject'] = "SUGGESTION";
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['user_info_id'] = 0;
        $query = $this->db->insert('member_message', $arr);
        return $query;
    }



    public function sendMail($name = null, $phone = null, $email = null, $subject = null, $message = null)
    {
        $from_email = "no-reply@tatnaywonproperty.com";
        $to_email = 'info@tatnaywonproperty.com';

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);

        $this->email->from($from_email);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'subject' => $subject,
        );

        $body = $this->load->view('templates/email_template/request_inquiry', $data, TRUE);
        $this->email->message($body);
    }






    public function data_save()
    {
        $arr['name'] = $this->input->post('name');
        $arr['phone'] = $this->input->post('phone');
        $arr['email'] = $this->input->post('email');
        $arr['message'] = $this->input->post('message');
        $arr['subject'] = $this->input->post('subject');
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $arr['user_info_id'] = $this->input->post('company_user_id');
        $query = $this->db->insert('member_message', $arr);
        return $query;
    }

    public function apply_jobs($arr)
    {
        $arr['name'] = $this->input->post('name');
        $arr['phone'] = $this->input->post('phone');
        $arr['email'] = $this->input->post('email');
        $arr['resume_file'] = $arr['resume_file'];
        $arr['date'] = date("Y-m-d");
        $arr['other_date'] = date("F j, Y");
        $query = $this->db->insert('apply_jobs', $arr);
        return $query;
    }
}
