<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasubkriteria extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Spk Smart - Data Sub Kriteria";
        $data['sub_kriteria'] = $this->Datasubkriteriam->Semuadata();
        $data['kriteria'] = $this->Datakriteriam->Semuadata();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('subkriteria/datasubkriteria', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function formtambahsubkriteria($id_kriteria)
    {
        $this->load->model('Datasubkriteriam');
        $this->load->model('Datakriteriam');

        $title = "Spk Smart - Tambah Sub Kriteria";
        $id_kriteria = $this->Datasubkriteriam->get_id_kriteria($id_kriteria);
        $sub_kriteria = $this->Datakriteriam->Semuadata();;

        $data = array(
            'sub_kriteria' => $sub_kriteria,
            'id_kriteria' => $id_kriteria,
            'title' => $title
        );
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('subkriteria/formtambahsubkriteria', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function aksi_tambah()
    {
        $this->Datasubkriteriam->aksi_tambah();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Disimpan!</div>');
        redirect('Datasubkriteria');
    }

    public function aksi_hapus($sub_kriteria)
    {
        $this->Datasubkriteriam->aksi_hapus($sub_kriteria);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Dihapus!</div>');
        redirect('Datasubkriteria');
    }

    public function formeditsubkriteria($sub_kriteria)
    {

        $data['title'] = "Spk Smart - Edit Sub Kriteria";
        $sub_kriteria = $this->Datasubkriteriam->join($sub_kriteria);
        $data['sub_kriteria'] = $sub_kriteria;
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('subkriteria/formeditsubkriteria', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function proses_edit()
    {
        $id_sub_kriteria = $this->input->post('id_sub_kriteria');
        $id_kriteria = $this->input->post('id_kriteria');
        $keterangan = $this->input->post('keterangan');
        $nilai = $this->input->post('nilai');

        $arrupdate = array(
            'id_kriteria' => $id_kriteria,
            'keterangan' => $keterangan,
            'nilai' => $nilai
        );
        $this->Datasubkriteriam->updatedata($id_sub_kriteria, $arrupdate);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Diupdate!</div>');
        redirect('Datasubkriteria');
    }
}
