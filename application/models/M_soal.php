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

    public function detailSoal($data)
    {
    	$this->db->insert('detail_soal',$data);
    }

    public function tampilSoal($id)
    {
    	return $this->db->query("SELECT * FROM detail_soal WHERE id_soal='$id'")->result();
    }
}