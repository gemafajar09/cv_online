<?php
class M_portofolio Extends CI_Model
{
	public function tampil($id)
    {
        return $this->db->query("SELECT * FROM portofolio WHERE id_portofolio='$id'")->result();
	}
	
	public function simpan($data)
	{
		$this->db->insert('portofolio',$data);
	}

	public function hapus($id)
	{
		$this->db->where('id_portofolio',$id)->delete('portofolio');
	}
}