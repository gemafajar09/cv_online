<?php
class Soal Extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_soal');
    }

    public function index()
    {
        $data['soal'] = $this->M_soal->tampil();
        $this->template->backend('admin/soal/viewSoal',$data);
    }

    public function simpanSoal()
    {
        $soal = $_POST['soal'];
        $jumlahsoal = $_POST['jumlahSoal'];

        $data = array(
            'soal' => $soal,
            'jumlah_soal' => $jumlahsoal
        );

        $this->M_soal->simpan($data);
        redirect('soal');
    }

    public function inputSoal()
    {
        $this->template->backend('admin/soal/inputSoal');
    }
}