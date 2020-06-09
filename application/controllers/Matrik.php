<?php
class Matrik Extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_matrik');
	}

	public function index()
	{
		$id = $this->session->userdata('id_user');
		$dataUser = $this->db->query("SELECT * FROM buat_cv WHERE id_user='$id' ORDER BY id_buat DESC")->row_array();
		$data['matrikAwal'] = $this->M_matrik->nilaiMatrik();
		$data['matrikAwal2'] = $this->M_matrik->matrikNormalisasi($dataUser['id_buat']);
		$data['matrikAwal3'] = $this->M_matrik->matrikSaw($dataUser['id_buat']);
		$this->template->backend('admin/matrix/viewMatrix',$data);
	}
}