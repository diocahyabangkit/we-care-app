<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengaduan_c extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Pages/Model');
    }

    public function index(){
        $data['user'] = $_SESSION;
        $data['title'] = "Data Pengaduan";
        $data['data'] = $this->Model->data_pengaduan();
        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Data_pengaduan_v',$data);
        $this->load->view('Pages/Footer_v',$data);
    }
}