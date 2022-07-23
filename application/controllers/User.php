<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('common');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];

        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('user/index');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function list()
    {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('User_model', 'list');
        $data['list'] = $this->list->getList();

        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('user/list', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function addUser()
    {
        $data['title'] = 'Add User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email has already registered!'
        ]);
        $this->form_validation->set_rules('phone', 'phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/head', $data);
            $this->load->view('user/adduser', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        } else {
            $this->User_model->adduser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">User Success Added</div>');
            redirect('user/list');
        }
    }

    public function edituser($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->User_model->getById($id);
        $data['fungsi'] = ['HSSE', 'MS', 'QQ', 'RS&D', 'GASS', 'FLEET', 'TRANSPORTIR'];

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/head', $data);
            $this->load->view('user/edituser', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        } else {
            $this->User_model->edituser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">User Success Updated!</div>');
            redirect('user/list');
        }
    }

    public function delete($id)
    {
        $this->User_model->deleteuser($id);
    }
}