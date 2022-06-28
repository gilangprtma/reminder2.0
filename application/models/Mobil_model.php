<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil_model extends CI_Model
{
    public function getListMobil()
    {
        $query = "SELECT * FROM `mobiltanki` ORDER BY `nopol` ASC";
        return $this->db->query($query)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('mobiltanki', ['id' => $id])->row_array();
    }

    public function addMobil($data)
    {
        $data = [
            'nopol' => htmlspecialchars($this->input->post('nopol', true)),
            'transportir' => htmlspecialchars($this->input->post('transportir', true)),
            'kap' => htmlspecialchars($this->input->post('kap', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'tera' => htmlspecialchars($this->input->post('tera', true)),
            'keur' => htmlspecialchars($this->input->post('keur', true)),
            'pajak' => htmlspecialchars($this->input->post('pajak', true)),
            'status' => '1'
        ];
        $this->db->insert('mobiltanki', $data);
    }

    public function editMobil()
    {
        $data = [
            'nopol' => htmlspecialchars($this->input->post('nopol', true)),
            'transportir' => htmlspecialchars($this->input->post('transportir', true)),
            'kap' => htmlspecialchars($this->input->post('kap', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'tera' => htmlspecialchars($this->input->post('tera', true)),
            'keur' => htmlspecialchars($this->input->post('keur', true)),
            'pajak' => htmlspecialchars($this->input->post('pajak', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mobiltanki', $data);
    }

    public function deletemobil($id)
    {
        $this->db->delete('mobiltanki', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Data has been deleted</div>');
        redirect('mobil');
    }
}
