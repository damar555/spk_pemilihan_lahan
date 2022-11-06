<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Spk Smart - Dashboard";
        $data['kriteria'] = $this->Datakriteriam->hitungjumlah();
        $data['sub_kriteria'] = $this->Datasubkriteriam->hitungjumlah();
        $data['alternatif'] = $this->Dataalternatifm->hitungjumlah();
        $data['user'] = $this->Datauserm->hitungjumlah();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('dasboard/dasboard', $data);
        $this->load->view('templates/dasboard_footer');
    }
}
