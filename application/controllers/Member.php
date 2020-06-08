<?php
class Member Extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_member');
    }

    public function index()
    {
        $data['member'] = $this->M_member->tampil();
        $this->template->backend('admin/member/viewMember',$data);
    }

    public function hapusMember()
    {
        $id = $_POST['id_user'];
        $this->M_member->hapus($id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('members');
    }
}