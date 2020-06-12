<?php
class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_berita');
	}

	public function index()
	{
		$data['berita'] = $this->M_berita->tampil();
		$this->template->backend('admin/berita/viewBerita', $data);
	}
	public function detailBerita($id)
	{
		$data['id'] = $id;
		$data['berita'] = $this->M_berita->getbyid($id);
		$this->template->frontend('user/template/detail_berita', $data);
	}

	public function simpanBerita()
	{
		$judul 		= $_POST['judul'];
		$deskripsi 	= $_POST['deskripsi'];
		$gambar 	= $this->upload();
		$tanggal 	= $_POST['tanggal'];

		$data = array(
			'judul_berita' => $judul,
			'deskripsi' => $deskripsi,
			'gambar' => $gambar,
			'tanggal_update' => $tanggal
		);
		$this->M_berita->simpan($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diinputkan');
		redirect('berita');
	}

	public function hapusBerita()
	{
		$id = $_POST['id_berita'];
		$this->M_berita->hapus($id);
		$this->session->set_flashdata('pesan', 'Data Terhapus');
		redirect('berita');
	}

	private function upload()
	{
		$config['upload_path']          = './upload/berita/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = uniqid();
		$config['overwrite']			= true;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}
		return "default.png";
	}
}
