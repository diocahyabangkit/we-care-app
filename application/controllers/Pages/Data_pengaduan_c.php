<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengaduan_c extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Pages/Model');
    }

    public function index(){
        $this->load->view('Pages/Data_pengaduan_v');
    }
}