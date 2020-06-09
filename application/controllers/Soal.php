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

    public function inputSoal($id)
    {
        $data['soal'] = $this->M_soal->tampilSoal($id);
        $this->template->backend('admin/soal/inputSoal',$data);
    }

    public function simpanDetailSoal()
    {
        $soal = $_POST['soal'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $jawaban = $_POST['jawaban'];
        $point = $_POST['point'];
        $id = $_POST['id'];

        $data = array(
            'id_soal' => $id,
            'soal' => $soal,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'jawaban' => $jawaban,
            'point' => $point
        );
         $msg = $this->M_soal->detailSoal($data);
         if($msg == TRUE)
         {
            $this->session->set_flashdata('pesan','Soal Berhasil Diinputkan');
         }else{
            $this->session->set_flashdata('error','Soal Gagal Diinputkan');  
         }

         redirect('inputSoal/'.$id);
    }
}