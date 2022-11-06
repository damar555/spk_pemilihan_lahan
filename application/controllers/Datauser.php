<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Spk Smart - Data User";
        $data['admin'] = $this->Datauserm->Semuadata();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('data_user/datauser', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function formtambahuser()
    {
        $data['title'] = "Spk Smart - Tambah User";
        $data['admin'] = $this->Datauserm->Semuadata();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('data_user/fromtambahuser', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function aksi_tambah()
    {
        $this->Datauserm->aksi_tambah();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Disimpan!</div>');
        redirect('Datauser');
    }

    public function aksi_hapus($id_admin)
    {
        $this->Datauserm->aksi_hapus($id_admin);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi Dihapus!</div>');
        redirect('Datauser');
    }

    public function formedituser($id_admin)
    {
        $title = "Spk Smart - Edit User";
        $admin = $this->Datauserm->get_id_admin($id_admin);
        $data = array('admin' => $admin,
                    'title' => $title);
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('data_user/formedituser', $data);
        $this->load->view('templates/dasboard_footer');
    }

    public function proses_edit()
    {
        $id_admin = $this->input->post('id_admin');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('Password');
        $level = $this->input->post('level');

        $arrupdate = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );
        $this->Datauserm->updatedata($id_admin, $arrupdate);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasi DiUpdate!</div>');
        redirect('Datauser');
    }
}
