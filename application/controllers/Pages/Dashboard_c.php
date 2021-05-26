<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_c extends CI_Controller {

    public function index(){
        $data['user'] = $_SESSION;
        $data['title'] = "Dashboard";
        $this->load->view('Pages/Header_v',$data);
        $this->load->view('Pages/Dashboard_v',$data);
        $this->load->view('Pages/Footer_v',$data);
    }
}