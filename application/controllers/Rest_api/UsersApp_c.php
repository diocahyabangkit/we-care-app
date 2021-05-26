<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

// Rest key Name
// "X-API-KEY"
// Rest Key Value Name
// wecare123

// Authorization name
// admin
// Authorization password
// 1234

class UsersApp_c extends RestController {

    function __construct(){
        parent::__construct();
        $this->load->model('Rest_api/Api_m');
    }

    public function Users_get(){
        $id = $this->get( 'id' );
        if ($id === null) {
            $data_users = $this->Api_m->get_users_app();
        }else{
            $data_users = $this->Api_m->get_users_app($id);
        }

        if($data_users){
            $this->response( $data_users, 200 );            
        }else{
            // Set the response and exit
            $this->response( [
                'status' => false,
                'message' => 'No users were found'
            ], 404 );
        }
    }

    public function Users_post(){
        $data_users = [
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'nik' => $this->post('nik'),
            'no-kk' => $this->post('no-kk'),
            'address' => $this->post('address'),
            'gender' => $this->post('gender'),
            'foto' => $this->post('foto'),
            'status' => $this->post('status')
        ];

        $insert = $this->Api_m->insert_users_app($data_users);
        
        if($insert){
            $this->response( [
                'status' => true,
                'message' => 'success insert data users'
            ],201);
        }else{
            $this->response( [
                'status' => false,
                'message' => 'fail'
            ], 400 );
        }
    }

    public function Users_put(){

    }

    public function Users_delete(){

    }



    // Login
    public function login_post(){
        $nik = $this->post('nik');
        $password = $this->post('password');

        $cek_nik = $this->db->get_where('users-app',['nik'=>$nik])->result_array();
        if($cek_nik){
            if($password == $cek_nik[0]['password']){
                // Login Berhasil
                $data_session = [
                    'id' => $cek_nik[0]['id'],
                    'name' => $cek_nik[0]['name'],
                    'email' => $cek_nik[0]['email'],
                    'nik' => $cek_nik[0]['nik'],
                    'no-kk' => $cek_nik[0]['no-kk'],
                    'status' => $cek_nik[0]['status']
                ];
                $this->response(['data'=>$cek_nik[0]], 200 );
            }else{
                // Password salah
                $this->response( [
                    'status' => false,
                    'message' => 'Password Salah'
                ], 400 );
            }
        }else{
            // Username Belum Terdaftar
            $this->response( [
                'status' => false,
                'message' => 'NIK Belum Terdaftar'
            ], 400 );
        }
    }
    
    
    // Sign Up
    public function register_post(){
        $data_users = [
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'nik' => $this->post('nik'),
            'no-kk' => $this->post('no-kk'),
            'address' => $this->post('address'),
            'gender' => $this->post('gender'),
            'foto' => $this->post('foto'),
            'status' => $this->post('status')
        ];

        $insert = $this->Api_m->insert_users_app(['data'=>$data_users],200);
        
        if($insert){
            $this->response( [
                'status' => true,
                'message' => 'success insert data users'
            ],201);
        }else{
            $this->response( [
                'status' => false,
                'message' => 'fail'
            ], 400 );
        }

    }

}