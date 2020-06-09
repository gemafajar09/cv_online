<?php
class M_history Extends CI_Model
{
	public function tampilHistory($id, $id_user)
	{
		return $this->db->query("SELECT * FROM buat_cv WHERE id_buat='$id' AND id_user='$id_user'")->result();
	}
}