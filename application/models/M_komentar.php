<?php
class M_komentar Extends CI_Model
{
	public function simpan($data)
	{
		$this->db->insert('komentar',$data);
	}

	public function simpanBalas($data)
	{
		$this->db->insert('balas_komentar',$data);
	}
}