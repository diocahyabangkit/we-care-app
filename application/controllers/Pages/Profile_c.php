<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_c extends MY_Controller {
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

    public function edit_profile(){
        $id = $this->input->post('id');
        $data = [
            'name-user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no-hp' => $this->input->post('no-hp')
        ];

        $this->db->update('user',$data);
        $this->db->where('id-user',$id);
        
        $this->session->set_flashdata('msg-edit','<script>Swal.fire("","Data Berhasil di Update","success")</script>');
                
        redirect(base_url().'Pages/Profile_c');
    }
}