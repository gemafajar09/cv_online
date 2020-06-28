<?php
class Portofolio Extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_portofolio');
	}

	public function index()
	{
		$data['portofolio'] = $this->db->get_where('portofolio')->result();
		$this->template->backend('admin/portofolio/index',$data);
	}

	public function simpanPortofolio()
    {
        $gambar = $this->upload();

        $data = array(
            'gambar' => $gambar
        );
        $this->M_portofolio->simpan($data);
        $this->session->set_flashdata('pesan','Data Berhasil Diinputkan');
        redirect('portofolio');
    }

    public function hapusPortofolio()
    {
        $id = $_POST['id_portofolio'];
        
        $gambar = $this->M_portofolio->tampil($id);
        $gambar1 = $gambar[0]->gambar;
        
        unlink('./upload/portofolio/'.$gambar1);
        
        $this->M_portofolio->hapus($id);
        $this->session->set_flashdata('pesan','Data Terhapus');
        redirect('portofolio');
    }

    private function upload()
    {
        $config['upload_path']          = './upload/portofolio/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = uniqid();
        $config['overwrite']			= true;
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }
}