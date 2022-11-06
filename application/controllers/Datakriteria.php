<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakriteria extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Spk Smart - Data Kriteria";
        $data['kriteria'] = $this->Datakriteriam->Semuadata();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('kriteria/datakriteria', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function formtambahkriteria()
    {
        $data['title'] = "Spk Smart - Tambah Kriteria";
        $data['kriteria'] = $this->Datakriteriam->Semuadata();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('kriteria/formtambahkriteria', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function aksi_tambah()
    {
        $this->Datakriteriam->aksi_tambah();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Disimpan!</div>');
        redirect('Datakriteria');
    }

    public function aksi_hapus($kriteria)
    {
        $this->Datakriteriam->aksi_hapus($kriteria);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Dihapus!</div>');
        redirect('Datakriteria');
    }

    public function formeditkriteria($id_kriteria)
    {
        $title = "Spk Smart - Edit Kriteria";
        $kriteria = $this->Datakriteriam->get_id_kriteria($id_kriteria);
        $data = array('kriteria' => $kriteria,
                    'title' => $title);
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('kriteria/formeditkriteria', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function proses_edit()
    {
        $id_kriteria = $this->input->post('id_kriteria');
        $namakriteria = $this->input->post('nama_kriteria');
        $kodekriteria = $this->input->post('kode_kriteria');
        $jenis = $this->input->post('jenis');
        $bobot = $this->input->post('bobot');

        $arrupdate = array(
            'nama_kriteria' => $namakriteria,
            'kode_kriteria' => $kodekriteria,
            'jenis' => $jenis,
            'bobot' => $bobot
        );
        $this->Datakriteriam->updatedata($id_kriteria, $arrupdate);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Diupdate!</div>');
        redirect('Datakriteria');
    }
}
