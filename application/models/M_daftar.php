<?php
class M_daftar Extends CI_Model
{
    public function daftar($data)
    {
        $this->db->insert('user',$data);
    }
}