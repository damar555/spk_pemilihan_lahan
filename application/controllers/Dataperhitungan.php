<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataperhitungan extends CI_Controller
{

    public function index()
    {
        $title = "Spk Smart - Perhitungan";
        $data = [
            'kriteria' => $this->Dataperhitunganmodel->ambil_data_kriteria(),
            'alternatif' => $this->Dataperhitunganmodel->ambil_data_alternatif(),
            'title' => $title
        ];
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('perhitungan/perhitungan', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function hasil()
        {
            $title = "Spk Smart - Hasil Akhir";
            $data = [
				'hasil'=> $this->Dataperhitunganmodel->get_hasil(),
                'title' => $title
            ];
			$this->load->view('templates/dasboard_header', $data);
            $this->load->view('Perhitungan/hasil', $data);
            $this->load->view('templates/dasboard_footer');
        }

    public function hasiluser()
    {
            $title = "Spk Smart - Hasil Akhir";
            $data = [
				'hasil'=> $this->Dataperhitunganmodel->get_hasil(),
                'title' => $title
            ];
			$this->load->view('templates/dashboard_header_user', $data);
            $this->load->view('Perhitungan/hasil', $data);
            $this->load->view('templates/dasboard_footer_user');
    }
}
