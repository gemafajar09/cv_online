<?php
class User Extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_daftar');
    }

    public function index()
    {
        if($this->session->userdata('id_user') != NULL)
        {
            redirect('halaman');
        }else{
            $this->template->frontend('user/template/home');
        }
    }

    public function halaman()
    {
        $this->template->frontend('user/template/home');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user',['username' => $username])->row_array();
        if($user['username'] == $username)
        {
            if(password_verify($password, $user['password']))
            {
                $data = [
                    'username' => $user['username'],
                    'id_user' => $user['id_user'],
                    'nama_user' => $user['nama_user']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('pesan','Selamat Datang');
                redirect('halaman');
            }else{
                $this->session->set_flashdata('error','Maaf Password Salah');
                redirect('User');
            }
        }else{
            $this->session->set_flashdata('error','Maaf Username Salah');
            redirect('User');
        }
    }

    public function daftar()
    {
        $nama_user = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password2'];
        $tanggal = date('Y-m-d');

        // cek username
        $cek = $this->db->get_where('user',['username' => $username])->row_array();
        if($cek != NULL)
        {
            $this->session->set_flashdata('error','Maaf Username Telah Ada..!');
        }else{
            if($password == $password_repeat)
            {
                $pass = password_hash($password, PASSWORD_DEFAULT);
            }else{
                $this->session->set_falshdata('error','Password Tidak Sama');
                redirect('User');
            }
    
            $data = array(
                'nama_user' => $nama_user,
                'email' => $email,
                'username' => $username,
                'password' => $pass,
                'password_repeat' => $password_repeat,
                'tanggal_daftar' => $tanggal
            );
            $this->M_daftar->daftar($data);
            $this->session->set_flashdata('pesan','SUCCESS Akun Anda Telah Aktif. Silahkan Login');
            redirect('User');

        }

    }

    public function logout()
    {
        $this->session->unset_userdata(array('username','id_user','nama_user'));
        $this->session->set_flashdata('pesan', 'Anda Telah Logout.');
        redirect('User');
    }
}