<?php
class Template{
    protected $_ci;
    
    public function __construct(){
        $this->_ci = &get_instance();
    }
    
    public function backend($content, $data = NULL){

        $data['header'] = $this->_ci->load->view('admin/template/header', $data, TRUE);
        $data['menu'] = $this->_ci->load->view('admin/template/menu', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('admin/template/footer', $data, TRUE);
        
        $this->_ci->load->view('admin/template/index', $data);
    }

    public function frontend($content, $data = NULL){

        $data['header'] = $this->_ci->load->view('user/template/header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('user/template/footer', $data, TRUE);
        
        $this->_ci->load->view('user/template/index', $data);
    }
}