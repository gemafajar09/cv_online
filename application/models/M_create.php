<?php
class M_create Extends CI_Model
{
    public function buat($data)
    {
        $this->db->insert('buat_cv',$data);
    }

    public function set_id_buat($id_buat,$id_user)
    {
        $this->db->where('id_user',$id_user)->update('user',['id_buat' => $id_buat]);
    }

    public function tampil()
    {
        return $this->db->get_where('template_cv')->result();
    }

    public function simpanDataDiri($data1, $data2, $where)
    {
        $this->db->where($where)->update('buat_cv',$data1);
        $this->db->insert('detail_pendidikan',$data2);
    }

    public function skillTampil()
    {
        return $this->db->query("SELECT * FROM tb_soal")->result();
    }

    public function jawabPertanyaan($id)
    {
        return $this->db->query("SELECT * FROM detail_soal WHERE id_soal='$id'")->result();
    }

    public function simpanPoint($data)
    {
        $this->db->insert('tb_matrix',$data);
    }
}