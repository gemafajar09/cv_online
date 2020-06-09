<?php
class History Extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_history');
    }

    public function index()
    {
    	$id = $this->session->userdata('id_buat');
    	$id_user = $this->session->userdata('id_user');
    	$data['history'] = $this->M_history->tampilHistory($id,$id_user);
        $this->template->frontend('user/history/viewhistory',$data);
    }
}