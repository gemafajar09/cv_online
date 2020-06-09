<?php
class M_matrik Extends CI_Model
{
	public function nilaiMatrik()
	{
		return $this->db->query("SELECT a.*,b.soal as skill FROM tb_matrix a LEFT JOIN tb_soal b ON a.id_soal=b.id_soal ORDER BY a.id_buat DESC")->result();
	}

	public function matrikNormalisasi($id)
	{
		return $this->db->query("SELECT tb_soal.soal, hasil.* FROM tb_soal JOIN (SELECT tb_matrix.id_buat, tb_matrix.id_matrix, tb_matrix.id_soal, 
			k1/(SELECT MAX(k1) AS k1 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k1,
			k2/(SELECT MAX(k2) AS k2 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k2,
			k3/(SELECT MAX(k3) AS k3 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k3,
			k4/(SELECT MAX(k4) AS k4 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k4,
			k5/(SELECT MAX(k5) AS k5 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k5,
			k6/(SELECT MAX(k6) AS k6 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k6,
			k7/(SELECT MAX(k7) AS k7 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k7,
			k8/(SELECT MAX(k8) AS k8 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k8,
			k9/(SELECT MAX(k9) AS k9 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k9,
			k10/(SELECT MAX(k10) AS k10 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k10 
			 FROM tb_matrix WHERE tb_matrix.id_buat = 1) hasil ON tb_soal.id_soal = hasil.id_soal")->result();
	}

	public function matrikSaw($id)
	{
		return $this->db->query("SELECT hasil_perhitungan.*, tb_soal.soal as skill FROM tb_soal JOIN (
		(SELECT hasil.id_buat, hasil.id_matrix, hasil.id_soal, 
		((hasil.k1*10) + (hasil.k2*10) + (hasil.k3*10) + (hasil.k4*10) +(hasil.k5*10) + (hasil.k6*10) + (hasil.k7*10) + (hasil.k8*10) + (hasil.k9*10) + (hasil.k10*10)) AS hasil 
		 FROM 
		(SELECT tb_matrix.id_buat, tb_matrix.id_matrix, tb_matrix.id_soal, 
		k1/(SELECT MAX(k1) AS k1 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k1,
		k2/(SELECT MAX(k2) AS k2 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k2,
		k3/(SELECT MAX(k3) AS k3 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k3,
		k4/(SELECT MAX(k4) AS k4 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k4,
		k5/(SELECT MAX(k5) AS k5 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k5,
		k6/(SELECT MAX(k6) AS k6 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k6,
		k7/(SELECT MAX(k7) AS k7 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k7,
		k8/(SELECT MAX(k8) AS k8 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k8,
		k9/(SELECT MAX(k9) AS k9 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k9,
		k10/(SELECT MAX(k10) AS k10 FROM tb_matrix WHERE tb_matrix.id_buat = '$id') AS k10 
		 FROM tb_matrix WHERE tb_matrix.id_buat = 1) hasil)) 
		hasil_perhitungan ON tb_soal.id_soal=hasil_perhitungan.id_soal ORDER BY hasil_perhitungan.hasil DESC")->result();
	}
}