<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengaduan_c extends MY_Controller {

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

    public function detail_pengaduan($id){
        $data['user'] = $_SESSION;
        $data['title'] = "Data Pengaduan";
        $data['title2'] = "Detail Pengaduan User";
        $detail = $this->Model->detail_pengaduan_id($id);
        
        foreach($detail as $d ):
            $data['detail'] = $d;
        endforeach;

        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Detail_pengaduan_v',$data);
        $this->load->view('Pages/Footer_v',$data);
    }

}