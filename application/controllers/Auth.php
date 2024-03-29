<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
        if ($this->session->userdata('email')) {
            redirect('user');
          }
          
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Reminder 2.0 - Login';
            $this->load->view('template/auth-header', $data);
            $this->load->view('auth/index');
            $this->load->view('template/auth-footer');
        }else{
            $this->_login();
        }
	}

    public function bloked()
    {
        $data['title'] = 'Reminder 2.0 - Bloked Page';
        $this->load->view('template/header', $data);
        $this->load->view('auth/bloked');
        $this->load->view('template/footer');
    }

    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika usernya ada
        if($user){
            //jika usernya aktif
            if($user['is_active'] == 1){
                //cek password
                if(password_verify($password, $user['password'])){
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1){
                        redirect('home');
                    }else{
                        redirect('user');
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }
    
    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

        if($this->form_validation->run() == false){
            $data['title'] = 'IMK Rewulu - Registration';
            $this->load->view('template/auth-header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth-footer');
        }else{
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Congratulation! Your account has been created. Please Activate Your Account</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">You have been logged out</div>');
        redirect('auth');
    }
}
