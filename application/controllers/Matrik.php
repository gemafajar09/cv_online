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
		$data['tampil'] = $this->M_matrik->tampil();
		$this->template->backend('admin/matrix/index',$data);
	}

	public function cek($id)
	{
		$data['matrikAwal'] = $this->M_matrik->nilaiMatrik();
		$data['matrikAwal2'] = $this->M_matrik->matrikNormalisasi($id);
		$data['matrikAwal3'] = $this->M_matrik->matrikSaw($id);
		$this->template->backend('admin/matrix/viewMatrix',$data);
	}
} 