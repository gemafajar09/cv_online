<?php
class Admin Extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_regis');
    }

    public function index()
    {
        if($this->session->userdata('id_admin') != NULL)
        {
            redirect('halamans');
        }else{
            $this->load->view('admin/auth/login');
        }
    }

    public function daftar()
    {
        $this->load->view('admin/auth/register');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = $this->db->get_where('admin',['username' => $username])->row_array();
        if($admin['username'] == $username)
        {
            if(password_verify($password, $admin['password']))
            {
                $data = [
                    'username' => $admin['username'],
                    'id_admin' => $admin['id_admin']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('pesan','Selamat Datanag');
                redirect('halamans');
            }else{
                $this->session->set_flashdata('error','Maaf Password Salah');
                redirect('Admin');
            }
        }else{
            $this->session->set_flashdata('error','Maaf Username Salah');
            redirect('Admin');
        }
    }

    public function register()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password2'];

        if($password == $password_repeat)
        {
            $pass = password_hash($password, PASSWORD_DEFAULT);
        }else{
            $this->session->set_falshdata('error','Password Tidak Sama');
            redirect('daftar');
        }

        $data = array(
            'username' => $username,
            'password' => $pass,
            'password_repeat' => $password_repeat
        );

        $this->M_regis->register($data);
        $this->session->set_flashdata('pesan','Akun Telah Aktif');
        redirect('Admin');
    }

    public function halaman()
    {
        $this->template->backend('admin/home');
    }

    public function logout()
    {
        $this->session->unset_userdata(array('username','id_admin'));
        $this->session->set_flashdata('pesan', 'Anda Telah Logout.');
        redirect('Admin');
    }
}