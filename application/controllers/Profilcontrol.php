<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilcontrol extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Spk Smart - Profil";
        $data['user'] = $this->db->get_where('admin', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('profil/profil');
        $this->load->view('templates/dasboard_footer');
    }

    public function user()
    {
        $data['title'] = "Spk Smart - Profil";
        $data['user'] = $this->db->get_where('admin', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/dashboard_header_user', $data);
        $this->load->view('profil/profil_user');
        $this->load->view('templates/dasboard_footer_user');
    }

    public function edit(){
        $data['title'] = "Spk Smart - Edit Profil";
        $data['user'] = $this->db->get_where('admin', ['username' => 
        $this->session->userdata('username')])->row_array();
        
        $this->load->view('templates/dasboard_header', $data);
        $this->load->view('profil/edit', $data);
        $this->load->view('templates/dasboard_footer', $data);
    }

    public function edit_user(){
        $data['title'] = "Spk Smart - Edit Profil";
        $data['user'] = $this->db->get_where('admin', ['username' => 
        $this->session->userdata('username')])->row_array();
        
        $this->load->view('templates/dashboard_header_user', $data);
        $this->load->view('profil/edit_user', $data);
        $this->load->view('templates/dasboard_footer_user', $data);
    }

    public function proses_edit()
    {
        $id_admin = $this->input->post('id_admin');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
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
        redirect('Profilcontrol');
    }

    public function proses_edit_user()
    {
        $id_admin = $this->input->post('id_admin');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
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
        redirect('Profilcontrol/user');
    }
}
