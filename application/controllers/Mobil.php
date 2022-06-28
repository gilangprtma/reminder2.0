<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model');
        $this->load->helper('tgl_indo');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Mobil Tanki';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Mobil_model', 'listmobil');
        $data['listmobil'] = $this->listmobil->getListMobil();

        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('mobil/index',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function addMobilTanki()
    {
        $data['title'] = 'Tambah Mobil Tanki';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nopol', 'Nopol', 'required|trim');
        $this->form_validation->set_rules('transportir', 'Transportir', 'trim|required');
        $this->form_validation->set_rules('kap', 'Kapasitas', 'required|trim|max_length[2]');
        $this->form_validation->set_rules('jenis', 'Jenis Produk', 'required|trim');
        $this->form_validation->set_rules('tera', 'Tera', 'trim|required');
        $this->form_validation->set_rules('keur', 'Keur', 'trim|required');
        $this->form_validation->set_rules('pajak', 'Pajak', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/head', $data);
            $this->load->view('mobil/addMobilTanki', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        } else {
            $this->Mobil_model->addMobil($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Mobil Tanki Success Added</div>');
            redirect('mobil');
        }
    }

    public function editMobil($id)
    {
        $data['title'] = 'Edit Mobil Tanki';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['mt'] = $this->Mobil_model->getById($id);
        $data['jenis'] = ['Multi Produk', 'Pertashop', 'Industri', 'Avtur'];

        $this->form_validation->set_rules('nopol', 'Nopol', 'required|trim');
        $this->form_validation->set_rules('transportir', 'Transportir', 'trim|required');
        $this->form_validation->set_rules('kap', 'Kapasitas', 'required|trim|max_length[2]');
        $this->form_validation->set_rules('jenis', 'Jenis Produk', 'required|trim');
        $this->form_validation->set_rules('tera', 'Tera', 'trim|required');
        $this->form_validation->set_rules('keur', 'Keur', 'trim|required');
        $this->form_validation->set_rules('pajak', 'Pajak', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/head', $data);
            $this->load->view('mobil/editMobilTanki', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        } else {
            $this->Mobil_model->editMobil();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Mobil Tanki Success Edit</div>');
            redirect('mobil');
        }
    }

    public function deleteMobil($id)
    {
        $this->Mobil_model->deletemobil($id);
    }
}