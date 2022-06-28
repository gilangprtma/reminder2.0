<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Home_model');
        
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hitungMT'] = $this->Home_model->jumlahMT();
        $data['keur30'] = $this->Home_model->keurHampirExpired();
        $data['tera30'] = $this->Home_model->teraHampirExpired();
        $data['pajak30'] = $this->Home_model->pajakHampirExpired();

        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('home/index',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

}