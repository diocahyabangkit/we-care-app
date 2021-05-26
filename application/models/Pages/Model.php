<?php 
    class Model extends CI_Model{

        public function data_user(){
            $email = $this->session->userdata('email-user');
            return $this->db->get_where('user',['email-user'=>$email])->row_array();
        }

        public function data_users_app(){
            $this->db->select('*');
            return $this->db->get('users-app')->result_array();
        }
    }

?>