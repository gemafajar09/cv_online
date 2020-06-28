<?php
class M_portofolio Extends CI_Model
{
	public function simpan($data)
	{
		$this->db->insert('portofolio',$data);
	}

	public function hapus($id)
	{
		$this->db->where('id_portofolio',$id)->delete('portofolio');
	}
}