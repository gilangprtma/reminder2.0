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
        $phones = $this->getAdminUser();

        $sql = "SELECT * FROM cronjob LIMIT 1";
        $query = $this->db->query($sql);

        if($query->num_rows() == 0){
            return;
        }

        $cron = $query->row();

        // ini buat keur
        $keur = $cron->keur1;
        $cronKeurInterval = array_map('intval', explode(',', $keur));
        $this->cronKeur($cronKeurInterval, $phones);

        // ini buat tera
        $tera = $cron->tera1;
        $cronTeraInterval = array_map('intval', explode(',', $tera));
        $this->cronTera($cronTeraInterval, $phones);

        // ini buat pajak
        $pajak = $cron->pajak1;
        $cronPajakInterval = array_map('intval', explode(',', $pajak));
        $this->cronPajak($cronPajakInterval, $phones);
        
    }

    private function savePDF($filename, $view, $data = [])
    {
        $this->load->library('pdflib');
        $pdf = new Pdflib('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->AddPage('P', 'F4');
        $html = $this->load->view($view, $data, true);
        $pdf->writeHTML($html);
        $pdf->Output(FCPATH . $filename, "F");

        return base_url($filename);
    }

    private function getAdminUser(): array
    {
        $phones = [];
        $sqlphone = "SELECT * FROM user";
        $userQuery = $this->db->query($sqlphone);
        if ($userQuery->num_rows() > 0) {
            foreach ($userQuery->result() as $user) {
                $phones[] = $user->phone;
            }
        }

        return $phones;
    }

    private function cronKeur($intervals = [], $adminPhones = [])
    {
        foreach ($intervals as $interval) {
            $theDay = now_carbon()->addDay($interval)->format('Y-m-d');

            $rows = $this->Mobil_model->getByKeur($theDay);
            // looping through mobiltanki
            foreach ($rows as $row) {
                if ($row) {
                    $filename = "assets/upload/KEUR{$row->id}{$row->nopol}{$interval}.pdf";
                    $url = $this->savePDF($filename, 'cronjob/print_new', [
                        'mobil' => $row,
                        'kind' => 'keur',
                        'interval' => $interval,
                        'tanggal' => now_carbon()->addDay($interval)->translatedFormat('l, d M Y'),
                    ]);

                    // send whatsapp
                    $data_wa = array(
                        'endpoint' => 'send-message',
                        'data' => [
                            'phone' => implode(',', $adminPhones),
                            'message' => $this->load->view('whatsapp/reminder-keur', [
                                'mobil' => $row,
                                'tanggal_expired' => $row->keur,
                                'url' => $url,
                            ], true),
                        ],
                    );

                    send_wablas($data_wa);

                    // send whatsapp transportir
                    $data_wa = array(
                        'endpoint' => 'send-message',
                        'data' => [
                            'phone' => implode(',', [$row->telepon_transportir]),
                            'message' => $this->load->view('whatsapp/reminder-transportir', [
                                'mobil' => $row,
                                'tanggal_expired' => $row->keur,
                                'url' => $url,
                            ], true),
                        ],
                    );

                    send_wablas($data_wa);
                }
            }
        }
    }

    private function cronTera($intervals = [], $adminPhones = [])
    {
        foreach ($intervals as $interval) {
            $theDay = now_carbon()->addDay($interval)->format('Y-m-d');

            $rows = $this->Mobil_model->getByTera($theDay);
            // looping through mobiltanki
            foreach ($rows as $row) {
                if ($row) {
                    $filename = "assets/upload/TERA{$row->id}{$row->nopol}{$interval}.pdf";
                    $url = $this->savePDF($filename, 'cronjob/print_new', [
                        'mobil' => $row,
                        'kind' => 'tera',
                        'interval' => $interval,
                        'tanggal' => now_carbon()->addDay($interval)->translatedFormat('l, d M Y'),
                    ]);

                    // send whatsapp
                    $data_wa = array(
                        'endpoint' => 'send-message',
                        'data' => [
                            'phone' => implode(',', $adminPhones),
                            'message' => $this->load->view('whatsapp/reminder-tera', [
                                'mobil' => $row,
                                'tanggal_expired' => $row->tera,
                                'url' => $url,
                            ], true),
                        ],
                    );

                    send_wablas($data_wa);

                    // send whatsapp transportir
                    $data_wa = array(
                        'endpoint' => 'send-message',
                        'data' => [
                            'phone' => implode(',', [$row->telepon_transportir]),
                            'message' => $this->load->view('whatsapp/reminder-transportir', [
                                'mobil' => $row,
                                'tanggal_expired' => $row->tera,
                                'url' => $url,
                            ], true),
                        ],
                    );

                    send_wablas($data_wa);
                }
            }
        }
    }

    private function cronPajak($intervals = [], $adminPhones = [])
    {
        foreach ($intervals as $interval) {
            $theDay = now_carbon()->addDay($interval)->format('Y-m-d');

            $rows = $this->Mobil_model->getByPajak($theDay);
            // looping through mobiltanki
            foreach ($rows as $row) {
                if ($row) {
                    $filename = "assets/upload/PAJAK{$row->id}{$row->nopol}{$interval}.pdf";
                    $url = $this->savePDF($filename, 'cronjob/print_new', [
                        'mobil' => $row,
                        'kind' => 'pajak',
                        'interval' => $interval,
                        'tanggal' => now_carbon()->addDay($interval)->translatedFormat('l, d M Y'),
                    ]);

                    // send whatsapp
                    $data_wa = array(
                        'endpoint' => 'send-message',
                        'data' => [
                            'phone' => implode(',', $adminPhones),
                            'message' => $this->load->view('whatsapp/reminder-pajak', [
                                'mobil' => $row,
                                'tanggal_expired' => $row->pajak,
                                'url' => $url,
                            ], true),
                        ],
                    );

                    send_wablas($data_wa);

                    // send whatsapp transportir
                    $data_wa = array(
                        'endpoint' => 'send-message',
                        'data' => [
                            'phone' => implode(',', [$row->telepon_transportir]),
                            'message' => $this->load->view('whatsapp/reminder-transportir', [
                                'mobil' => $row,
                                'tanggal_expired' => $row->pajak,
                                'url' => $url,
                            ], true),
                        ],
                    );

                    send_wablas($data_wa);
                }
            }
        }
    }
}