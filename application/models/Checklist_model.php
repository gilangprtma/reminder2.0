<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checklist_model extends CI_Model
{
    public function getListCheck()
    {
        $query = "SELECT * FROM `checklist` ORDER BY `id` DESC";
        return $this->db->query($query)->result_array();
    }
    
}