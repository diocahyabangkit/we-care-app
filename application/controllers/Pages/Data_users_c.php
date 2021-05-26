<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Data_users_c extends CI_Controller {
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
}