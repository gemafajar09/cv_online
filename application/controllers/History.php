<?php
class History Extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $this->template->frontend('user/history/viewhistory');
    }
}