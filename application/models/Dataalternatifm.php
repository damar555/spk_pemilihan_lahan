<?php
class Dataalternatifm extends CI_Model
{

    public function Semuadata()
    {
        // return $this->db->get('alternatif')->result_array();
        $this->db->select('*');
        $this->db->from('alternatif');
        return $this->db->get()->result_array();
    }

    public function aksi_tambah()
    {
        $data = [
            "nama_alternatif" => $this->input->post('namaalternatif'),
            "alamat" => $this->input->post('alamat')
        ];

        $this->db->insert('alternatif', $data);
    }

    public function aksi_hapus($alternatif)
    {
        $this->db->where('id_alternatif', $alternatif);
        $this->db->delete('alternatif');
    }

    public function get_id_alternatif($alternatif)
    {
        return $this->db->get_where('alternatif', ['id_alternatif' => $alternatif])->row_array();
    }

    public function proses_edit($alternatif)
    {
        $this->db->where('id_alternatif', $alternatif);
        $query = $this->db->get('alternatif');
        return $query->row();
    }

    public function updatedata($alternatif, $data)
    {
        $this->db->where('id_alternatif', $alternatif);
        $this->db->update('alternatif', $data);
    }

    public function hitungjumlah()
    {
        $query = $this->db->get('alternatif');
        if($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
