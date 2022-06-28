<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cronjob_model extends CI_Model
{
    public function getCronjob()
    {
        $query = "SELECT * FROM `cronjob` ORDER BY `id` DESC";
        return $this->db->query($query)->result_array();
    }

    public function addCronjob($data)
    {
        $keur1 = implode(',', $this->input->post('keur1', true));
        $tera1 = implode(',', $this->input->post('tera1', true));
        $pajak1 = implode(',', $this->input->post('pajak1', true));
        $data = [
            'keur1' => $keur1,
            'tera1' => $tera1,
            'pajak1' => $pajak1
        ];
        $this->db->insert('cronjob', $data);
    }

}