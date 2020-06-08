<?php
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
            'instagram' => $instagram
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
        $this->session->set_flashdata('pesan','Silahkan Pilih Skill Berdasarkan Kepandaian Anda.');
        redirect('create');
    }

    private function upload()
    {
        $config['upload_path']          = './upload/slider/';
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