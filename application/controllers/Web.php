<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
 
    function _construct(){
        parent::_construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "Halaman Index";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function about(){
        $data['judul'] = "Halaman About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
}
