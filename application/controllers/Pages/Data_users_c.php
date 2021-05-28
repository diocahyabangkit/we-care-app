<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Data_users_c extends MY_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->model('Pages/Model');
    }

    public function index(){
        $data['user'] = $_SESSION;
        $data['title'] = "Data Users";
        $data['data_users'] = $this->Model->data_users_app();
        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Data_users_v',$data);
        $this->load->view('Pages/Footer_v',$data);
    }

    public function detail_pengaduan($id){
        $data['user'] = $_SESSION;
        $data['title'] = "Data Users";
        $data['title2'] = "Detail Pengaduan User";
        $data['details'] = $this->Model->detail_pengaduan_idUsers($id);

        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Detail_pengaduan_idUser_v',$data);
        $this->load->view('Pages/Footer_v',$data);

    }

    public function detail_user($id){
        $data['user'] = $_SESSION;
        $data['title'] = "Data Users";
        $data['title2'] = "Detail User";
        $detail = $this->Model->detail_user($id);
        
        foreach($detail as $d ):
            $data['detail'] = $d;
        endforeach;

        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Detail_user_v',$data);
        $this->load->view('Pages/Footer_v',$data);
    }
}