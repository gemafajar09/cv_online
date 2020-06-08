<?php
class M_template Extends CI_Model
{
    public function tampil()
    {
        return $this->db->get_where('template_cv')->result();
    }

    public function simpan($data)
    {
        $this->db->insert('template_cv',$data);
    }
    public function hapus($id)
    {
        $this->db->where('id_template',$id)->delete('template_cv');
    }
}