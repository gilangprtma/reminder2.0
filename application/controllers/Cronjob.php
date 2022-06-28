<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cronjob extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cronjob_model');
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        $data['title'] = 'Cron Job';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Cronjob_model', 'cron');
        $data['cron'] = $this->cron->getCronjob();

        if($data['cron']){
            $data['cron'] = $data['cron'][0];
        }

        $this->form_validation->set_rules('keur1[]', 'Keur1', 'required|trim');
        $this->form_validation->set_rules('tera1[]', 'Tera1', 'required|trim');
        $this->form_validation->set_rules('pajak1[]', 'Pajak1', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('cronjob/index', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
        }else{
            $this->Cronjob_model->addCronjob($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Cronjob Success Added</div>');
            redirect('Cronjob');
        }
    }
}
