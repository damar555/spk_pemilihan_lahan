<?php
class Datauserm extends CI_Model
{

    public function Semuadata()
    {
        return $this->db->get('admin')->result_array();
    }

    public function aksi_tambah()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('Password'),
            "level" => $this->input->post('level')
        ];

        $this->db->insert('admin', $data);
    }

    public function aksi_hapus($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('admin');
    }

    public function get_id_admin($id_admin)
    {
        return $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
    }

    public function proses_edit($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $query = $this->db->get('admin');
        return $query->row();
    }

    public function updatedata($id_admin, $data)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
    }

    public function hitungjumlah()
    {
        $query = $this->db->get('admin');
        if($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
