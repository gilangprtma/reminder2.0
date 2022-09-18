<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transportir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transportir_model');
        $this->load->helper('tgl_indo');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Transportir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Transportir_model', 'list');
        $data['list'] = $this->list->getList();

        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('transportir/index',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function addTrans()
    {
        $data['title'] = 'Tambah Transportir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/head', $data);
            $this->load->view('transportir/tambah', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        } else {
            $this->Transportir_model->addTransportir($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Transportir berhasil ditambah</div>');
            redirect('transportir');
        }
    }

    public function editTransportir($id)
    {
        $data['title'] = 'Ubah Transportir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['trans'] = $this->Transportir_model->getById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/head', $data);
            $this->load->view('transportir/edit', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        } else {
            $this->Transportir_model->editTrans();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Transportir berhasil diubah</div>');
            redirect('transportir');
        }
    }

    public function deleteTransportir($id)
    {
        $this->Transportir_model->deleteTrans($id);
    }

}