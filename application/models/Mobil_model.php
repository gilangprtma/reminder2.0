<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil_model extends CI_Model
{
    public function getListMobil()
    {
        $query = "SELECT m.*, t.`nama` AS nama_transportir
            FROM `mobiltanki` m
            JOIN `transportir` t ON m.`transportir` = t.`id`
            ORDER BY m.`nopol` ASC
        ";
        return $this->db->query($query)->result_array();
    }

    public function find($id)
    {
        $query = "SELECT 
                m.*, 
                t.`nama` AS nama_transportir,
                t.`telepon` AS telepon_transportir
            FROM `mobiltanki` m
            JOIN `transportir` t ON m.`transportir` = t.`id`
            WHERE m.`id` = ?
        ";
        return $this->db->query($query, [$id])->row();
    }

    public function getByKeur($val)
    {
        $query = "SELECT 
                m.*, 
                t.`nama` AS nama_transportir,
                t.`telepon` AS telepon_transportir
            FROM `mobiltanki` m
            JOIN `transportir` t ON m.`transportir` = t.`id`
            WHERE m.`keur` = ?
        ";
        return $this->db->query($query, [$val])->result();
    }

    public function getByTera($val)
    {
        $query = "SELECT 
                m.*, 
                t.`nama` AS nama_transportir,
                t.`telepon` AS telepon_transportir
            FROM `mobiltanki` m
            JOIN `transportir` t ON m.`transportir` = t.`id`
            WHERE m.`tera` = ?
        ";
        return $this->db->query($query, [$val])->result();
    }

    public function getByPajak($val)
    {
        $query = "SELECT 
                m.*, 
                t.`nama` AS nama_transportir,
                t.`telepon` AS telepon_transportir
            FROM `mobiltanki` m
            JOIN `transportir` t ON m.`transportir` = t.`id`
            WHERE m.`pajak` = ?
        ";
        return $this->db->query($query, [$val])->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('mobiltanki', ['id' => $id])->row_array();
    }

    public function getTrans()
    {
        $query = "SELECT `transportir`.`id`,`nama`
        FROM `transportir`
        WHERE `transportir`.is_active = '1'

        ";
        return $this->db->query($query)->result_array();
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

    //public function insert($data){
	//	$insert = $this->db->insert_batch('mobiltanki', $data);
	//	if($insert){
	//		return true;
//		}
//	}
}
