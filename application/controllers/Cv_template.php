<?php
class Cv_template Extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_template');
    }

    public function index()
    {
        $data['templatess'] = $this->M_template->tampil();
        $this->template->backend('admin/template_cv/templateCv',$data);
    }

    public function simpanTemplate()
    {
        $gambar1 = $this->uploads();
        $gambar = $this->upload();
        $deskripsi = $_POST['deskripsi'];
        $tanggal = date('Y-m-d');

        $data = array(
            'thumbnail' => $gambar1,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'tanggal_update' => $tanggal
        );
        $this->M_template->simpan($data);
        $this->session->set_flashdata('pesan','Data Berhasil Diinputkan');
        redirect('templates');
    }

    public function hapusTemplate()
    {
        $id = $_POST['id_template'];
        
        $gambar = $this->M_template->tampil_id($id);
        $gambar1 = $gambar[0]->gambar;
        unlink('./upload/template/'.$gambar1);

        
        $gambar2 = $gambar[0]->thumbnail;
        unlink('./upload/thumbnail/'.$gambar2);
        
        $this->M_template->hapus($id);
        $this->session->set_flashdata('pesan','Data Terhapus');
        redirect('templates');
    }

    private function upload()
    {
        $config['upload_path']          = './upload/template/';
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

    private function uploads()
    {
        $config['upload_path']          = './upload/thumbnail/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = uniqid();
        $config['overwrite']			= true;
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar1')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

}