<?php
class Datasubkriteriam extends CI_Model
{

    public function Semuadata()
    {
        // return $this->db->get('sub_kriteria')->result_array();
        $this->db->select('*');
        $this->db->from('sub_kriteria');
        $this->db->join('kriteria', 'kriteria.id_kriteria = sub_kriteria.id_kriteria');
        return $this->db->get()->result_array();
    }

    public function data_sub_kriteria()
    {
        $query = $this->db->get('sub_kriteria');
        return $query->result_array();
    }

    public function aksi_tambah()
    {
        $data = [
            "id_kriteria" => $this->input->post('id_kriteria'),
            "keterangan" => $this->input->post('keterangan'),
            "nilai" => $this->input->post('nilai')
        ];

        $this->db->insert('sub_kriteria', $data);
    }

    public function aksi_hapus($sub_kriteria)
    {
        $this->db->where('id_sub_kriteria', $sub_kriteria);
        $this->db->delete('sub_kriteria');
    }

    public function get_id_kriteria($id_kriteria)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id_kriteria])->row_array();
    }


    public function get_id_sub_kriteria($sub_kriteria)
    {
        return $this->db->get_where('sub_kriteria', ['id_sub_kriteria' => $sub_kriteria])->row_array();
    }

    public function proses_edit($sub_kriteria)
    {
        $this->db->where('id_sub_kriteria', $sub_kriteria);
        $query = $this->db->get('sub_kriteria');
        return $query->row();
    }

    public function join($sub_kriteria) 
    {
        $this->db->select('*');
        $this->db->from('sub_kriteria');
        $this->db->join('kriteria', 'kriteria.id_kriteria = sub_kriteria.id_kriteria');
        $this->db->where('sub_kriteria.id_sub_kriteria', $sub_kriteria);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function updatedata($sub_kriteria, $data)
    {
        $this->db->where('id_sub_kriteria', $sub_kriteria);
        $this->db->update('sub_kriteria', $data);
    }

    public function hitungjumlah()
    {
        $query = $this->db->get('sub_kriteria');
        if($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
