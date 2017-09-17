<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_login extends CI_Model{
        
        public function getPanitia($email, $password){
            $this->db->select('*');
            $this->db->from('panitia');
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            $query = $this->db->get();
            return $query;
        }

        public function getAdmin($email, $password){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            $query = $this->db->get();
            return $query;
        }

        public function ubahpassword($email, $data){
            $this->db->where('email', $email);
            $this->db->update('panitia', $data);
        }
        
}