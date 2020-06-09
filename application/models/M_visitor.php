<?php

Class M_visitor Extends CI_Model
{
    public function sekarang()
    {
        $tanggal = date('Y-m-d');

        return $this->db->query("SELECT count(ip) as ips, sum(hits) as onlinee FROM `statistik` WHERE tanggal='$tanggal'")->result_array();
    }
    
    public function kemarin()
    {
        $tanggal = date('Y-m-d');
        $tgl2 = date('Y-m-d', strtotime('-1 days', strtotime($tanggal)));
        return $this->db->query("SELECT sum(hits) as onn FROM `statistik` WHERE tanggal='$tgl2'")->result_array();
    }
}