<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function print()
    {
        $data['title'] = "Spk Smart - Cetak Data";
        $data['hasil'] = $this->Dataperhitunganmodel->get_hasil();
        $this->load->view('cetak/print_data', $data);
    }
}