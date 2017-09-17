<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_admin extends CI_Model{
        
        public function tampil()
        {
             return $this->db->get('admin');
        }

        public function tambah_admin(){
             $idAdmin  = $this->input->post('idAdmin');
             $namaAdmin = $this->input->post('nama');
             $email = $this->input->post('email');
             $password = $this->input->post('katasandi');
                     
                     $object = array(
                                    'idAdmin' => $idAdmin,
                                    'namaAdmin' => $namaAdmin,
                                    'email' => $email,
                                    'password' => $password,
                            );

                     return $this->db->insert('admin', $object);
            
        }

        function select_all(){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->order_by('date_modified', 'desc');
            return $this->db->get();
        }

        function getPassword($katasandi){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('password', $katasandi);
            $query = $this->db->get();
            return $query;
        }

        function tampilPerson($idAdmin){
            return $this->db->get_where('admin', array('idAdmin'=>$idAdmin))->row();
        }
        
        function select_by_id($idAdmin){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('idAdmin', $idAdmin);
            return $this->db->get();
        }
        
        function ubah_admin($idAdmin, $data){
            $this->db->where('idAdmin', $idAdmin);
            $this->db->update('admin', $data);
        }

        function hapus_admin($idAdmin){
            $this->db->where('idAdmin', $idAdmin);
            $this->db->delete('admin');
        }

        function getkodeunik($kode) { 

            $q = $this->db->query("SELECT MAX(RIGHT(idAdmin,2)) AS idmax FROM ".$kode);
            $kd = ""; //kode awal
            if($q->num_rows()>0){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                    $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
                }
            }else{ //jika data kosong diset ke kode awal
                $kd = "01";
            }
            $kar = "A"; //karakter depan kodenya
            //gabungkan string dengan kode yang telah dibuat tadi
            return $kar.$kd;
        }
        
}