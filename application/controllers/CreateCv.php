<?php
 require 'vendor/autoload.php';
use Dompdf\Dompdf;
class CreateCv Extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_create');
    }

    public function index()
    {
        $data['template_cv'] = $this->M_create->tampil();
        $this->template->frontend('user/create_cv/create_cv',$data);
    }

    public function buatCv()
    {
        $id_user = $this->session->userdata('id_user');
        $id_template = $_POST['pilih'];
        $hitung = count($id_template);
        if($hitung <> 1)
        {
            $this->session->set_flashdata('error','Pastikan Template Yang Dipilih Tidak Lebih Dari 1');
            redirect('create');
        }else{
            // var_dump($id_template); exit;
            $data = array(
                'id_user' => $id_user,
                'id_template' => $id_template[0]
            );
            $template = $id_template[0];
            $this->M_create->buat($data);
            $ambilData = $this->db->query("SELECT * FROM buat_cv WHERE id_user='$id_user' AND id_template='$template' ORDER BY id_buat DESC LIMIT 1")->result();
            $this->M_create->set_id_buat($ambilData[0]->id_buat,$id_user);
            redirect('buat2/',$data);
        }
    }

    public function dataDiri()
    {
        $id = $this->session->userdata('id_user');
        $ambil = $this->db->query("SELECT id_buat FROM user WHERE id_user='$id'")->row_array();
        $data['buat'] = $ambil['id_buat'];
        $this->template->frontend('user/create_cv/isidata',$data);
    }

    public function simpanDataDiri()
    {
        $id_buat = $_POST['iniapaya'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telpon = $_POST['no_telpon'];
        $email = $_POST['email'];
        $instagram = $_POST['instagram'];
        $whatsapp = $_POST['whatsapp'];
        $data_diri = $_POST['data_diri'];
        $sd = $_POST['sd'];
        $smp = $_POST['smp'];
        $sma = $_POST['sma'];
        $d3 = $_POST['d3'];
        $s1 = $_POST['s1'];
        $s2 = $_POST['s2'];
        $sddari = $_POST['sddari'];
        $smpdari = $_POST['smpdari'];
        $smadari = $_POST['smadari'];
        $d3dari = $_POST['d3dari'];
        $s1dari = $_POST['s1dari'];
        $s2dari = $_POST['s2dari'];
        $sdsampai = $_POST['sdsampai'];
        $smpsampai = $_POST['smpsampai'];
        $smasampai = $_POST['smasampai'];
        $d3sampai = $_POST['d3sampai'];
        $s1sampai = $_POST['s1sampai'];
        $s2sampai = $_POST['s2sampai'];
        $gambar = $this->upload();

        // pengalaman
        $pengalaman = $_POST['pengalaman'];
        $tahun = $_POST['tahun'];

        foreach($pengalaman as $i => $c)
        {
            $this->db->query("INSERT INTO pengalaman (id_buat,pengalaman,tahun) VALUES ('$id_buat','$pengalaman[$i]','$tahun[$i]')");
        }

        $data1 = array(
            'gambar' => $gambar,
            'nama' => $nama_lengkap,
            'tempat_lahir' => $tempat,
            'tahun_lahir' => $tanggal,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_telpon' => $no_telpon,
            'email' => $email,
            'whatsapp' => $whatsapp,
            'instagram' => $instagram,
            'data_diri' => $data_diri
        );

        $data2 = array(
            'id_buat' => $id_buat,
            'sd' => $sd,
            'dari_sd' => $sddari,
            'sampai_sd' => $sdsampai,
            'smp' => $smp,
            'dari_smp' => $smpdari,
            'sampai_smp' => $smpsampai,
            'sma' => $sma,
            'dari_sma' => $smadari,
            'sampai_sma' => $smasampai,
            'd3' => $d3,
            'dari_d3' => $d3dari,
            'sampai_d3' => $d3sampai,
            's1' => $s1,
            'dari_s1' => $s1dari,
            'sampai_s1' => $s1sampai,
            's2' => $s2,
            'dari_s2' => $s2dari,
            'sampai_s2' => $s2sampai
        );

        $where = array('id_buat' => $id_buat);
        $this->M_create->simpanDataDiri($data1,$data2,$where);
        $id_user = $this->session->userdata('id_user');
        $dataDiri = array(
            'id_buat' => $id_buat,
            'id_user' => $id_user
        );
        $this->session->set_flashdata('pesan','Silahkan Pilih Skill Berdasarkan Kepandaian Anda.');
        redirect('buat4');
    }

    public function inputSkill()
    {
        $id = $this->session->userdata('id_user');
        $ambil = $this->db->query("SELECT id_buat FROM user WHERE id_user='$id'")->row_array();
        $data['buat'] = $ambil['id_buat'];
        $data['skill'] = $this->M_create->skillTampil();
        $this->template->frontend('user/create_cv/isiSkill',$data);
    }

    public function jawabSoal($id)
    {
        $carinama = $this->db->query("SELECT * FROM tb_soal WHERE id_soal='$id'")->row_array();
        $data['nama_ujian'] = $carinama['soal'];
        $data['soal'] = $this->M_create->jawabPertanyaan($id);
        $this->template->frontend('user/create_cv/soal',$data);
    }

    public function simpanJawaban()
    {
        $id = $this->session->userdata('id_user');
        $ambil = $this->db->query("SELECT id_buat FROM user WHERE id_user='$id'")->row_array();
        $id_buat = $ambil['id_buat'];
        $id_soal = $_POST['id_soal'];
        $id1 = $_POST['id1'];
        $id2 = $_POST['id2'];
        $id3 = $_POST['id3'];
        $id4 = $_POST['id4'];
        $id5 = $_POST['id5'];
        $id6 = $_POST['id6'];
        $id7 = $_POST['id7'];
        $id8 = $_POST['id8'];
        $id9 = $_POST['id9'];
        $id10 = $_POST['id10'];
        $cek1 = $_POST['cek1'];
        $cek2 = $_POST['cek2'];
        $cek3 = $_POST['cek3'];
        $cek4 = $_POST['cek4'];
        $cek5 = $_POST['cek5'];
        $cek6 = $_POST['cek6'];
        $cek7 = $_POST['cek7'];
        $cek8 = $_POST['cek8'];
        $cek9 = $_POST['cek9'];
        $cek10 = $_POST['cek10'];

        $soal1 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id1'")->row_array();
        $soal2 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id2'")->row_array();
        $soal3 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id3'")->row_array();
        $soal4 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id4'")->row_array();
        $soal5 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id5'")->row_array();
        $soal6 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id6'")->row_array();
        $soal7 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id7'")->row_array();
        $soal8 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id8'")->row_array();
        $soal9 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id9'")->row_array();
        $soal10 = $this->db->query("SELECT * FROM detail_soal WHERE id_detail='$id10'")->row_array();
        if($soal1['jawaban'] == $cek1)
        {
            $hasil1 = $soal1['point'];
        }else{
            $hasil1 = 1;
        }
        if($soal2['jawaban'] == $cek2)
        {
            $hasil2 = $soal2['point'];
        }else{
            $hasil2 = 1;
        }
        if($soal3['jawaban'] == $cek3)
        {
            $hasil3 = $soal3['point'];
        }else{
            $hasil3 = 1;
        }
        if($soal4['jawaban'] == $cek4)
        {
            $hasil4 = $soal4['point'];
        }else{
            $hasil4 = 1;
        }
        if($soal5['jawaban'] == $cek5)
        {
            $hasil5 = $soal5['point'];
        }else{
            $hasil5 = 1;
        }
        if($soal6['jawaban'] == $cek6)
        {
            $hasil6 = $soal6['point'];
        }else{
            $hasil6 = 1;
        }
        if($soal7['jawaban'] == $cek7)
        {
            $hasil7 = $soal7['point'];
        }else{
            $hasil7 = 1;
        }
        if($soal8['jawaban'] == $cek8)
        {
            $hasil8 = $soal8['point'];
        }else{
            $hasil8 = 1;
        }
        if($soal9['jawaban'] == $cek9)
        {
            $hasil9 = $soal9['point'];
        }else{
            $hasil9 = 1;
        }
        if($soal10['jawaban'] == $cek10)
        {
            $hasil10 = $soal10['point'];
        }else{
            $hasil10 = 1;
        }
        $data = array(
            'id_buat' => $id_buat,
            'id_soal' => $id_soal,
            'k1' => $hasil1,
            'k2' => $hasil2,
            'k3' => $hasil3,
            'k4' => $hasil4,
            'k5' => $hasil5,
            'k6' => $hasil6,
            'k7' => $hasil7,
            'k8' => $hasil8,
            'k9' => $hasil9,
            'k10' => $hasil10
        );
        $this->M_create->simpanPoint($data);
        $this->session->set_flashdata('pesan','Silahkan Pilih Skill Berdasarkan Kepandaian Anda.');
        redirect('buat4');
    }

    public function CetakCv()
    {

        $nama_file = "default.pdf";
      

        $content = $this->load->view('user/cetak_cv/cv', '', TRUE);
        echo $content; exit;
        // $dompdf = new Dompdf();
        // $dompdf->set_base_path("assets/");
        // $dompdf->loadHtml($content);
        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'portrait');

        // // Render the HTML as PDF
        // $dompdf->render();

        // $dompdf->stream($nama_file, array("Attachment" => false));
        // exit(0);
    }

    private function upload()
    {
        $config['upload_path']          = './upload/dataDiri/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = uniqid();
        $config['overwrite']			= true;
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }
}