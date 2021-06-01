<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_c extends CI_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper(array('url','form'));
            $this->load->library('session');
    }

    public function index(){
        if($this->session->userdata('email-user')){
            redirect('Pages/Dashboard_c');
        }else{
            $this->load->view('Auth/Head_v');
            $this->load->view('Auth/Auth_v');
        }
    }

    public function Act_SignIn(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email-user'=>$email])->row_array();
        if($user){
            if(password_verify($password,$user['password'])){
                $data = [
                    'email-user' => $email,
                    'name-user' => $user['name-user'],
                    'isLogged' => TRUE
                ];
                $this->session->set_userdata($data);
                redirect('Pages/Dashboard_c');
            }else{
                // Email Password Salah
                $this->session->set_flashdata('msg','<script>Swal.fire("","sorry your username or password is wrong","error")</script>');
                
                redirect(base_url().'Auth_c');
            }
        }else{
            // User Email Belum Terdaftar
            $this->session->set_flashdata('msg','<script>Swal.fire("","sorry your username not regis","error")</script>');
            redirect('Auth_c');
        }
    }


// Sign Up
    public function Sign_up(){
        $this->load->view('Auth/Head_v');
        $this->load->view('Auth/SignUp_v');
    }

    public function Act_SignUp(){
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email-user]');

        if ($this->form_validation->run() == false) {
            redirect('Auth_c');
        }else{
            $data = [
                'name-user' => $this->input->post('name'),
                'email-user' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT)
            ];
            $this->db->insert('user',$data);
            redirect('Auth_c');
        }
    }


// Logout
    public function Logout(){
        $this->session->sess_destroy();
        redirect('Auth_c');
    }

}

