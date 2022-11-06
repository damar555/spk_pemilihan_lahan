<?php
class Datakriteriam extends CI_Model
{

    public function Semuadata()
    {
        // return $this->db->get('kriteria')->result_array();
        $this->db->select('*');
        $this->db->from('kriteria');
        return $this->db->get()->result_array();
    }

    public function aksi_tambah()
    {
        $data = [
            "nama_kriteria" => $this->input->post('namakriteria'),
            "kode_kriteria" => $this->input->post('kodekriteria'),
            "jenis" => $this->input->post('jenis'),
            "bobot" => $this->input->post('bobot')
        ];

        $this->db->insert('kriteria', $data);
    }

    public function aksi_hapus($kriteria)
    {
        $this->db->where('id_kriteria', $kriteria);
        $this->db->delete('kriteria');
    }

    public function get_id_kriteria($kriteria)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $kriteria])->row_array();
    }

    public function proses_edit($kriteria)
    {
        $this->db->where('id_kriteria', $kriteria);
        $query = $this->db->get('kriteria');
        return $query->row();
    }

    public function updatedata($kriteria, $data)
    {
        $this->db->where('id_kriteria', $kriteria);
        $this->db->update('kriteria', $data);
    }

    public function hitungjumlah()
    {
        $query = $this->db->get('kriteria');
        if($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
