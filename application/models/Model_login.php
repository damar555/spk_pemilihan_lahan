<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{

    public function ambillogin($username, $password)
    {
        $query = $this->db->get_where('admin', ['username' => $username])->row_array();
        if ($query) {
            if ($password == $query['password']) {
                $data = [
                    'username' => $query['username'],
                    'nama' => $query['nama'],
                    'level' => $query['level']
                ];
                $this->session->set_userdata($data);
            if ($query['level'] == 'A')
            {
            redirect('Dasboard');
            } else {
            redirect('User');
            }
            } else {
                $this->session->set_flashdata('info', 'MAAF Username dan Password Anda salah!, Mohon diperiksa kembali');
            redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('info', 'MAAF Username dan Password Anda salah!, Mohon diperiksa kembali');
            redirect('Auth');
        }
    }
}
