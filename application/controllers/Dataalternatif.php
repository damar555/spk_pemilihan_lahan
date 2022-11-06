<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataalternatif extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Spk Smart - Data Alternatif";
        $data['alternatif'] = $this->Dataalternatifm->Semuadata();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('alternatif/dataalternatif', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function formtambahalternatif()
    {
        $data['title'] = "Spk Smart - Tambah Alternatif";
        $data['alternatif'] = $this->Dataalternatifm->Semuadata();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('alternatif/formtambahalternatif', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function aksi_tambah()
    {
        $this->Dataalternatifm->aksi_tambah();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Disimpan!</div>');
        redirect('Dataalternatif');
    }

    public function aksi_hapus($alternatif)
    {
        $this->Dataalternatifm->aksi_hapus($alternatif);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Dihapus!</div>');
        redirect('Dataalternatif');
    }

    public function formeditalternatif($id_alternatif)
    {
        $title = "Spk Smart - Edit Alternatif";
        $alternatif = $this->Dataalternatifm->get_id_alternatif($id_alternatif);
        $data = array('alternatif' => $alternatif,
                        'title' => $title);
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('alternatif/formeditalternatif', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function proses_edit()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $namaalternatif = $this->input->post('nama_alternatif');
        $alamat = $this->input->post('alamat');

        $arrupdate = array(
            'nama_alternatif' => $namaalternatif,
            'alamat' => $alamat
        );
        $this->Dataalternatifm->updatedata($id_alternatif, $arrupdate);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Diupdate!</div>');
        redirect('Dataalternatif');
    }
}
