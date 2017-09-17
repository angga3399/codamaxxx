<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_cfd extends CI_Model{
        
        public function tampil()
        {
             return $this->db->get('carfree');
        }

        
        function getPanitia($email){
            $this->db->select('*');
            $this->db->from('panitia');
            $this->db->where('email', $email);
            $query = $this->db->get();
            return $query;
        }

        function tambah_panitia(){
             $email = $this->input->post('email');
                     
             $object = array(
                    'email' => $email,
             );

             return $this->db->insert('panitia', $object);
        }

        function select_by_id($email){
            $this->db->select('*');
            $this->db->from('panitia');
            $this->db->where('email', $email);
            return $this->db->get();
        }

        function getkodeunik($kode) { 

            $q = $this->db->query("SELECT MAX(RIGHT(idCarFree,2)) AS idmax FROM ".$kode);
            $kd = ""; //kode awal
            if($q->num_rows()>0){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                    $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
                }
            }else{ //jika data kosong diset ke kode awal
                $kd = "01";
            }
            $kar = "C"; //karakter depan kodenya
            //gabungkan string dengan kode yang telah dibuat tadi
            return $kar.$kd;
        }
        
}