<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_c extends CI_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->model('Pages/Model');
    }

    public function index(){
        $data['user'] = $_SESSION;
        $data['title'] = "Profile";
        $data['data_user'] = $this->Model->data_user();
        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Profile_v',$data);
        $this->load->view('Pages/Footer_v',$data);
    }
}