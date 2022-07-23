<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model');
        $this->load->helper('tgl_indo');
        $this->load->helper('common');
    }

    public function index()
    {
        $id = $this->input->post('id') ? $this->input->post('id') : 0;

        $phone = '';
        $sqlphone = "SELECT * FROM user";
        $queryphone = $this->db->query($sqlphone);
        if($queryphone->num_rows() > 0){
            foreach($queryphone->result() as $k=>$j){
                $phone.=$j->phone;
                if($queryphone->num_rows()!=$k+1){
                    $phone.=',';
                }
            }
        }

        //pdf
        $this->load->library('pdflib');
        $pdf = new Pdflib('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->AddPage('P', 'F4');
        $data['mob'] = $this->Mobil_model->getById($id);
        $html = $this->load->view('cronjob/print', $data, true);
        $pdf->writeHTML($html, true, false, false, false, '');
        $fcpatch = 'assets/upload/' . date('Ymd.His') . '.pdf';
        $url = base_url() . $fcpatch;
        $pdf->Output(FCPATH . $fcpatch, "F");
        //end pdf

        $sql = "SELECT * FROM cronjob WHERE 1 LIMIT 1";
        $query = $this->db->query($sql);

        if($query->num_rows() >0){
            //ini buat keur
            $keur = $query->row()->keur1;
            $keurarr = explode(',',$keur);

            foreach ($keurarr as $i=>$v){
                $date = date('Y-m-d');
                $tanggalExpired = '2022-07-06';
                $tanggalKeurPeriode1DB = $v;
                $tanggalKeurPeriode1 = date('Y-m-d', strtotime('+'.$tanggalKeurPeriode1DB.'days'));

                $content_length = 0;

                if ($url != '' && $url != NULL) {
                    $headers = get_headers($url, true);

                    if (isset($headers['Content-Length'])) {
                        $content_length = $headers['Content-Length'];
                    }

                        $querytanki = $this->db->query("SELECT * FROM mobiltanki WHERE keur='$tanggalKeurPeriode1'");
                        if($querytanki->num_rows()>0 && $content_length > 0){
                            foreach($querytanki->result() as $idx=>$val){
                                $data_wa = array(
                                    'endpoint' => 'send-message',
                                    'data' => array(
                                        'phone' => $phone,
                                        'message' => 'Assalamualaikum  Wr. Wb, Salam Sejahtera
                                        Keur Mobil Tanki Nomor '.$val->nopol.' akan habis / tidak berlaku pada tanggal '.$val->keur.', mohon agar segera dilakukan
                                        keur
                                        Jika dalam waktu yang telah ditentukan keur tidak segera dilakukan, maka Mobil Tanki tersebut tidak dapat
                                        beroperasi. 
                                        Terimakasih
                                        '.$url.''
                                    ),
                                );
                                $send_wa = send_wablas($data_wa);
                            }
                        }
                }
            }
            //end buat keur

            //ini buat tera
            $tera = $query->row()->tera1;
            $teraarr = explode(',',$tera);

            foreach ($teraarr as $u=>$x){
                $date = date('Y-m-d');
                $tanggalTeraPeriode1DB = $x;
                $tanggalTeraPeriode1 = date('Y-m-d', strtotime('+'.$tanggalTeraPeriode1DB.'days'));

                $querytankitera = $this->db->query("SELECT * FROM mobiltanki WHERE tera='$tanggalTeraPeriode1'");
                if($querytankitera->num_rows()>0){
                    foreach($querytankitera->result() as $idu=>$valu){
                        $data_wa = array(
                            'endpoint' => 'send-message',
                            'data' => array(
                                'phone' => $phone,
                                'message' => 'Assalamualaikum  Wr. Wb, Salam Sejahtera
                                
                                Tera Mobil Tanki Nomor '.$valu->nopol.' akan habis / tidak berlaku pada tanggal '.$valu->tera.', mohon agar segera dilakukan
                                tera
                                
                                Jika dalam waktu yang telah ditentukan keur tidak segera dilakukan, maka Mobil Tanki tersebut tidak dapat
                                beroperasi.
                                
                                Terimakasih'
                            ),
                        );
                        $send_wa = send_wablas($data_wa);
                    }
                }
            }
            //end buat tera

            //ini buat pajak
            $pajak = $query->row()->pajak1;
            $pajakarr = explode(',',$pajak);

            foreach ($pajakarr as $m=>$w){
                $date = date('Y-m-d');
                $tanggalPajakPeriode1DB = $w;
                $tanggalPajakPeriode1 = date('Y-m-d', strtotime('+'.$tanggalPajakPeriode1DB.'days'));

                $querytankipajak = $this->db->query("SELECT * FROM mobiltanki WHERE pajak='$tanggalPajakPeriode1'");
                if($querytankipajak->num_rows()>0){
                    foreach($querytankipajak->result() as $idm=>$valo){
                        $data_wa = array(
                            'endpoint' => 'send-message',
                            'data' => array(
                                'phone' => $phone,
                                'message' => 'Assalamualaikum  Wr. Wb, Salam Sejahtera
                                
                                Pajak Mobil Tanki Nomor '.$valo->nopol.' akan habis / tidak berlaku pada tanggal '.$valo->pajak.', mohon agar segera dilakukan
                                pajak
                                
                                Jika dalam waktu yang telah ditentukan keur tidak segera dilakukan, maka Mobil Tanki tersebut tidak dapat
                                beroperasi.
                                
                                Terimakasih'
                            ),
                        );
                        $send_wa = send_wablas($data_wa);
                    }
                }
            }
            //end buat pajak
        }
    }
}