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

    public function editSoal()
    {
        $id = $_POST['id_detail'];
        $data = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id'")->row_array();
        echo json_encode($data);
    }

    public function simpanDetailSoal()
    {
        $soal = $_POST['soal'];

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];

        $jawaban_a = $_POST['jawaban_a'];
        $point_a = $_POST['point_a'];
        $jawaban_b = $_POST['jawaban_b'];
        $point_b = $_POST['point_b'];
        $jawaban_c = $_POST['jawaban_c'];
        $point_c = $_POST['point_c'];
        $jawaban_d = $_POST['jawaban_d'];
        $point_d = $_POST['point_d'];

        $id = $_POST['id'];
        $id_detail = $_POST['id_detail'];

        $data = array(
            'id_soal' => $id,
            'soal' => $soal,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'jawaban_a' => $jawaban_a,
            'point_a' => $point_a,
            'jawaban_b' => $jawaban_b,
            'point_b' => $point_b,
            'jawaban_c' => $jawaban_c,
            'point_c' => $point_c,
            'jawaban_d' => $jawaban_d,
            'point_d' => $point_d,
        );
        $where = array('id_detail' => $id_detail);
        if($id_detail == NULL)
        {
            $msg = $this->M_soal->detailSoal($data);
        }else{
            $msg = $this->M_soal->editdetailSoal($data, $where);
        }
         if($msg == TRUE)
         {
            $this->session->set_flashdata('pesan','Soal Berhasil Diinputkan');
         }else{
            $this->session->set_flashdata('error','Soal Gagal Diinputkan');  
         }

         redirect('inputSoal/'.$id);
    }
}