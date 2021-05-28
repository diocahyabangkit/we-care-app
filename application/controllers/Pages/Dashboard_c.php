<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_c extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Pages/Model');
    }
    public function index(){
        $data['user'] = $_SESSION;
        $data['title'] = "Dashboard";
        $data['count_user'] = $this->Model->CountUsersApp();
        $data['count_pengaduan'] = $this->Model->CountPengaduan();
        $data['pengaduan_ok'] = $this->Model->CountPengaduan_ok();
        $data['pengaduan_NotOk'] = $this->Model->CountPengaduan_NotOk();
        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Dashboard_v',$data);
        $this->load->view('Pages/Footer_v',$data);
    }
}