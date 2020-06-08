<?php
class Slider Extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_slider');
    }

    public function index()
    {
        $data['slider'] = $this->M_slider->tampil();
        $this->template->backend('admin/slider/viewSlider',$data);
    }

    public function simpanSlider()
    {
        $gambar = $this->upload();
        $deskripsi = $_POST['deskripsi'];

        $data = array(
            'gambar' => $gambar,
            'deskripsi' => $deskripsi
        );
        $this->M_slider->simpan($data);
        $this->session->set_flashdata('pesan','Data Berhasil Diinputkan');
        redirect('sliders');
    }

    public function hapusSlider()
    {
        $id = $_POST['id_slider'];
        $this->M_slider->hapus($id);
        $this->session->set_flashdata('pesan','Data Terhapus');
        redirect('sliders');
    }

    private function upload()
    {
        $config['upload_path']          = './upload/slider/';
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