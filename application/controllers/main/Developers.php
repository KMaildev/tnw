<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Developers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');
        if (empty($this->admin_id)) {
            redirect(base_url('auth'));
        }

        $this->load->model('admin/region_model');
        $this->load->model('admin/packages_system_model');
        $this->load->model('admin/datacheck_model');
        $this->load->model('admin/developers_model');
    }

    public function index($offset = 0)
    {
        $config = [
            'base_url' => base_url('main/developers/index'),
            'total_rows' => $this->developers_model->count_all(),
            'per_page' => 50,
            'reuse_query_string' => TRUE,
            'full_tag_open' => '<ul class="pagination">',
            'full_tag_close' => '</ul>',
            'first_tag_open' => '<li class="page-item page-link">',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li class="page-item page-link">',
            'last_tag_close' => '</li>',
            'next_tag_open' => '<li class="page-item page-link">',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li class="page-item page-link">',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li class="page-item page-link">',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="page-item active"><a class="page-link">',
            'cur_tag_close' => '</a></li>',
        ];

        $this->pagination->initialize($config);
        $data["developers"] = $this->developers_model->getAll($config['per_page'], $offset);
        $data["count_all"] = $this->developers_model->count_all();
        $this->load->view('admin/developers/index', $data);
    }

    public function create()
    {
        $data["count_all"] = $this->developers_model->count_all();
        $data["regions"] = $this->region_model->getAll();
        $data["packages"] = $this->packages_system_model->get_package();
        $this->load->view('admin/developers/create', $data);
    }



    public function member_register()
    {

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $logo = $data['upload_data']['file_name'];
        }
        $logo =  $logo ?? "";

        $this->form_validation->set_rules(
            'phone_number',
            'Please Enter Phone number or email',
            'required|is_unique[user_info.email]',
            array(
                'is_unique'     => 'Phone number or email is already exists.'
            )
        );

        $this->form_validation->set_rules('password', 'Enter Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Enter Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone No.', 'required');
        $this->form_validation->set_rules('user_permissions', 'Type', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', ' %s');

        if ($this->form_validation->run() === FALSE) {
            $data["count_all"] = $this->developers_model->count_all();
            $data["regions"] = $this->region_model->getAll();
            $data["packages"] = $this->packages_system_model->get_package();
            $this->load->view('admin/developers/create', $data);
        } else {
            $count_number = $this->developers_model->count_all();
            $last = $count_number;
            $last++;
            $number = sprintf('%07d', $last);
            $company_ID = "U-" . $number;

            $data = array(
                'name' => $this->input->post('name'),
                'company_name' => $this->input->post('company_name'),
                'login_mail' => $this->input->post('phone_number'),
                'confirm_mail' => $this->input->post('email'),
                'phone_no' => $this->input->post('phone_no'),
                'password' => md5($this->input->post('password')),
                'company_type' => $this->input->post('company_type'),
                'address' => $this->input->post('address'),
                'description' => $this->input->post('description'),
                'company_id' => $company_ID,
                'logo' => $logo,
                'region_id' => $this->input->post('region_id'),
            );

            $this->developers_model->member_register($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }




    public function save()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $logo = $data['upload_data']['file_name'];
        }

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('company_type', 'Company Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('company_id', 'company', 'required');
        $this->form_validation->set_rules('package_id', 'Package', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');

        $data = array(
            'email' => $this->input->post('email'),
        );
        $check = $this->datacheck_model->email_check($data);
        if ($check != false) {
            $this->session->set_flashdata('danger', 'Error: Email already exists');
            $data["count_all"] = $this->developers_model->count_all();
            $data["regions"] = $this->region_model->getAll();
            $data["packages"] = $this->packages_system_model->get_package();
            $this->load->view('admin/developers/create', $data);
        } else {
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('danger', 'Error: Fill all fields');
                $data["count_all"] = $this->developers_model->count_all();
                $data["regions"] = $this->region_model->getAll();
                $data["packages"] = $this->packages_system_model->get_package();
                $this->load->view('admin/developers/create', $data);
            } else {
                $company_type = strtolower($this->input->post('company_type'));
                $data['company_type'] = str_replace(" ", "_", $company_type);
                $data['logo'] = $logo ?? "";
                $this->developers_model->save($data);
                $this->session->set_flashdata('success', 'Successfully');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }




    public function show($id)
    {
        $data["detail"] = $this->developers_model->find_by_id($id);
        $data["total_sale_ad"] = $this->developers_model->total_sale_ad($id);
        $data["total_rent_ad"] = $this->developers_model->total_rent_ad($id);
        $data["total_new_properties_ad"] = $this->developers_model->total_new_properties_ad($id);

        $data["get_sale_ad"] = $this->developers_model->get_sale_ad($id);
        $data["get_rent_ad"] = $this->developers_model->get_rent_ad($id);
        $data["get_new_properties_ad"] = $this->developers_model->get_new_properties_ad($id);

        $data["count_all"] = $this->developers_model->count_all();
        $data["regions"] = $this->region_model->getAll();
        $data["packages"] = $this->packages_system_model->get_package();

        $this->load->view('admin/developers/show', $data);
    }


    public function update()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('company_type', 'Company Type', 'required');
        $this->form_validation->set_rules('region_id', 'Region', 'required');

        $data = array(
            'email' => $this->input->post('email'),
            'user_id' => $this->input->post('user_id'),
        );

        $email_check_data = array(
            'email' => $this->input->post('email'),
        );

        $email_check_already = $this->datacheck_model->email_check_already($data);
        $check = $this->datacheck_model->email_check($email_check_data);

        $check_email = $email_check_already->email;
        $email = $this->input->post('email');

        if ($check_email == $email) {
            $data['company_type'] = $this->input->post('company_type');
            $data['email'] = $check_email;
            $this->developers_model->update($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if ($check != false) {
                $this->session->set_flashdata('danger', 'Error: Phone number or email already exists');
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                if ($this->form_validation->run() === FALSE) {
                    $this->session->set_flashdata('danger', 'Error: Fill all fields');
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $data['company_type'] = $this->input->post('company_type');
                    $data['email'] = $this->input->post('email');
                    $this->developers_model->update($data);
                    $this->session->set_flashdata('success', 'Successfully');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }
    }


    public function change_password()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('danger', 'Error: Something wrong');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->developers_model->change_password();
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function change_company_logo()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('single_file')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('danger', 'Invalid image format error');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $logo = $data['upload_data']['file_name'];

            $data['logo'] = $logo;
            $this->developers_model->change_company_logo($data);
            $this->session->set_flashdata('success', 'Successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function changeStatusToSuspended($id)
    {
        $this->developers_model->changeStatusToSuspended($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function changeStatusToActive($id)
    {
        $this->developers_model->changeStatusToActive($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
