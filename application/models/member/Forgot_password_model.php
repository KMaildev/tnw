<?php
class Forgot_password_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    public function ForgotPassword($email)
    {
        $this->db->select('email');
        $this->db->from('user_info');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function sendpassword($data)
    {
        $email = $data['email'];
        $query1 = $this->db->query("SELECT *  FROM user_info WHERE email = '" . $email . "' ");
        $row = $query1->result_array();
        if ($query1->num_rows() > 0) {
            $passwordplain = "";
            $passwordplain  = rand(100000, 999999);
            $newpass['password'] = md5($passwordplain);
            $this->db->where('email', $email);
            $this->db->update('user_info', $newpass);

            $from_email = "no-reply@tatnaywonproperty.com";
            $to_email = $email;

            //Load email library 
            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'utf-8';
            $config['mailtype'] = 'html';
            $config['wordwrap'] = TRUE;
            $this->email->initialize($config);

            $this->email->from($from_email);
            $this->email->to($to_email);
            $this->email->subject('Your password at TatNayWonProperty.com has been reset!');

            $data = array(
                'passwordplain' => $passwordplain
            );

            $body = $this->load->view('templates/email_template/forgot_password', $data, TRUE);

            $this->email->message($body);

            //Send mail 
            if (@$this->email->send()) {
                $this->session->set_flashdata("success", "Password sent to your email!");
                // redirect($_SERVER['HTTP_REFERER']);
                $this->load->view('member/auth/login');
            } else {
                $this->session->set_flashdata("danger", "Failed to send password, please try again!");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }
}
