<?php
class M_berita extends CI_Model
{
	public function tampil()
	{
		return $this->db->get_where('berita')->result();
	}
	public function tampil2()
	{
		return $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1")->result();
	}

	public function getbyid($id = 'id_berita')
	{
		return $this->db->query("SELECT * FROM berita WHERE id_berita='$id' ORDER BY id_berita DESC LIMIT 1")->result();
		// $this->db->from('berita');
		// if ($id != null) {
		// 	$this->db->where('id_berita', $id);
		// }
		// $this->db->order_by('id_berita', 'desc');

		// $query = $this->db->get();
		// return $query;
	}

	public function simpan($data)
	{
		$this->db->insert('berita', $data);
	}
	public function hapus($id)
	{
		$this->db->where('id_berita', $id)->delete('berita');
	}
}
