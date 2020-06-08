<?php
class M_regis Extends CI_Model
{
    private $table = 'admin';

    public function register($data)
    {
        $this->db->insert($this->table,$data);
    }
}