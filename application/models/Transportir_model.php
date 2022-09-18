<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transportir_model extends CI_Model
{
    public function getList()
    {
        $query = "SELECT * FROM `transportir` ORDER BY `id` ASC";
        return $this->db->query($query)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('transportir', ['id' => $id])->row_array();
    }

    public function addTransportir($data)
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'telepon' => htmlspecialchars($this->input->post('telepon', true)),
            'is_active' => '1'
        ];
        $this->db->insert('transportir', $data);
    }

    public function editTrans()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'telepon' => htmlspecialchars($this->input->post('telepon', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('transportir', $data);
    }

    public function deleteTrans($id)
    {
        $this->db->delete('transportir', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Data berhasil dihapus</div>');
        redirect('transportir');
    }
}
