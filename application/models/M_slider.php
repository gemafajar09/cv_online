<?php
class M_slider Extends CI_Model
{
    public function tampil()
    {
        return $this->db->get_where('slider')->result();
    }

    public function tampil_id($id)
    {
        return $this->db->query("SELECT * FROM slider WHERE id_slider='$id'")->result();
	}

    public function simpan($data)
    {
        $this->db->insert('slider',$data);
    }
    public function hapus($id)
    {
        $this->db->where('id_slider',$id)->delete('slider');
    }
}