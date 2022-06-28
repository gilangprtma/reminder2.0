<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function jumlahMT()
    {
        $query = $this->db->get('mobiltanki');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function keurHampirExpired()
    {
        $tanggalKeurPeriode1DB = '30';
        $tanggalKeurPeriode1 = date('Y-m-d', strtotime('+'.$tanggalKeurPeriode1DB.'days'));

        $querytanki = $this->db->query("SELECT * FROM mobiltanki WHERE keur='$tanggalKeurPeriode1'");

        if ($querytanki->num_rows() > 0) {
            return $querytanki->num_rows();
        } else {
            return 0;
        }
    }

    public function teraHampirExpired()
    {
        $tanggalTeraPeriode1DB = '30';
        $tanggalTeraPeriode1 = date('Y-m-d', strtotime('+'.$tanggalTeraPeriode1DB.'days'));

        $querytanki = $this->db->query("SELECT * FROM mobiltanki WHERE tera='$tanggalTeraPeriode1'");

        if ($querytanki->num_rows() > 0) {
            return $querytanki->num_rows();
        } else {
            return 0;
        }
    }

    public function pajakHampirExpired()
    {
        $tanggalPajakPeriode1DB = '30';
        $tanggalPajakPeriode1 = date('Y-m-d', strtotime('+'.$tanggalPajakPeriode1DB.'days'));

        $querytanki = $this->db->query("SELECT * FROM mobiltanki WHERE pajak='$tanggalPajakPeriode1'");

        if ($querytanki->num_rows() > 0) {
            return $querytanki->num_rows();
        } else {
            return 0;
        }
    }
}