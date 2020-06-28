<?php
class Laporan Extends CI_COntroller
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		$data['pengunjung'] = $this->db->query("SELECT SUM(hits) as klik, ip FROM statistik GROUP BY ip DESC")->result();
		$data['buat'] = $this->db->query("SELECT count(a.id_buat) as jumlah, b.nama_user as nama FROM buat_cv a JOIN user b ON a.id_user=b.id_user GROUP BY a.id_user DESC")->result();
		$this->template->backend('admin/laporan/index',$data);
	}
}