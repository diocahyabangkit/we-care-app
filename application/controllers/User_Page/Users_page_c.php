<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_page_c extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Pages/Model');
    }

    public function index(){
        $data['count_pengaduan'] = $this->Model->CountPengaduan();
        $data['pengaduan_ok'] = $this->Model->CountPengaduan_ok();
        $data['pengaduan_NotOk'] = $this->Model->CountPengaduan_NotOk();
        $this->load->view('User_Page/Head_v');
        $this->load->view('User_Page/User_page_v',$data);
    }
}