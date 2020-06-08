<?php
class M_soal Extends CI_Model
{
    public function tampil()
    {
        return $this->db->get_where('tb_soal')->result();
    }

    public function simpan($data)
    {
        $this->db->insert('tb_soal',$data);
    }
}