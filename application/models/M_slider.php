<?php
class M_slider Extends CI_Model
{
    public function tampil()
    {
        return $this->db->get_where('slider')->result();
    }

    public function simpan($data)
    {
        $this->db->insert('slider',$data);
    }
    public function hapus($id)
    {
        $this->db->where('id_slider',$id)->delete('slider');
    }
}