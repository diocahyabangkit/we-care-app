<?php 
    class Model extends CI_Model{

        public function data_user(){
            $email = $this->session->userdata('email-user');
            return $this->db->get_where('user',['email-user'=>$email])->row_array();
        }

        public function data_users_app(){
            return $this->db->get('users-app')->result_array();
        }


        // Page Data Pengaduan
        public function data_pengaduan(){
            return $this->db->get('pengaduan')->result_array();
        }

        // Page Detail Pengaduan per ID_pengaduan
        public function detail_pengaduan_id($id){
            return $this->db->get_where('pengaduan',['id'=> $id])->result_array();
        }

        // Page Detail Pengaduan per ID_Users
        public function detail_pengaduan_idUsers($id){
            return $this->db->get_where('pengaduan',['id_user'=> $id])->result_array();
        }
    }

?>