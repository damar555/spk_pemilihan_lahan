<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapenilaian extends CI_Controller
{

    public function index()
    {
        $title = "Spk Smart - Data Penilaian";
        $data = [
            'list' => $this->Datapenilaianm->Semuadata(),
            'kriteria' => $this->Datapenilaianm->ambil_data_kriteria(),
            'alternatif' => $this->Datapenilaianm->ambil_data_alternatif(),
            'sub_kriteria' => $this->Datapenilaianm->ambil_data_sub_kriteria(),
            'title' => $title
        ];
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('penilaian/datapenilaian', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function aksi_hapus($penilaian)
    {
        $this->Datapenilaianm->aksi_hapus($penilaian);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Dihapus!</div>');
        redirect('Datapenilaian');
    }

    public function aksi_tambah()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $id_kriteria = $this->input->post('id_kriteria');
        $nilai = $this->input->post('nilai');
        $i = 0;
        echo var_dump($nilai);
        foreach ($nilai as $ni) {
            $this->Datapenilaianm->aksi_tambah($id_alternatif, $id_kriteria[$i], $ni);
            $i++;
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Disimpan!</div>');
        redirect('Datapenilaian');
    }

    public function aksi_edit()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $id_kriteria = $this->input->post('id_kriteria');
        $nilai = $this->input->post('nilai');
        $i = 0;

        foreach ($nilai as $ni) {
            $cek = $this->Datapenilaianm->data_penilaian($id_alternatif, $id_kriteria[$i]);
            if ($cek == 0) {
                $this->Datapenilaianm->aksi_tambah($id_alternatif, $id_kriteria[$i], $ni);
            } else {
                $this->Datapenilaianm->aksi_edit($id_alternatif, $id_kriteria[$i], $ni);
            }
            $i++;
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Disimpan!</div>');
        redirect('Datapenilaian');
    }
}
