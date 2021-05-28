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

        // Page Detail User
        public function detail_user($id){
            return $this->db->get_where('users-app',['id'=>$id])->result_array();
        }

        // Menghitung Jumlah Users App
        public function CountUsersApp(){
            $query = $this->db->get('users-app');
            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{
                return 0;
            }
        }

        public function CountPengaduan(){
            $query = $this->db->get('pengaduan');
            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{
                return 0;
            }
        }

        public function CountPengaduan_ok(){
            $query = $this->db->where(['status'=>'Ok'])->from("pengaduan")->count_all_results();
            if($query > 0)
            {
                return $query;
            }else{
                return 0;
            }
        }

        public function CountPengaduan_NotOk(){
            $query = $this->db->where(['status'=>'Not Ok'])->from("pengaduan")->count_all_results();
            if($query > 0)
            {
                return $query;
            }else{
                return 0;
            }
        }
        
    }

?>