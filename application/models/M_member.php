<?php
class M_member Extends CI_Model
{
    public function tampil()
    {
        return $this->db->get_where('user')->result();
    }

    public function hapus($id)
    {
        $this->db->where('id_user',$id)->delete('user');
    }
}