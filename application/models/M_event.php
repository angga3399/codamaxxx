<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_event extends CI_Model{
        
        public function tampil()
        {
             $this->db->select("*");
             $this->db->FROM("event");
             $this->db->join("jadwal","event.idJadwal=jadwal.idJadwal");
             $this->db->join("carfree","jadwal.idCarFree=carfree.idCarFree");
             return $this->db->get()->result();
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

        public function getActivasi($idEvent){
            $this->db->select('*');
            $this->db->FROM('event');
            $this->db->join('jadwal','event.idJadwal=jadwal.idJadwal');
            $this->db->join('carfree','jadwal.idCarFree=carfree.idCarFree');
            $this->db->where('event.idEvent',$idEvent);
            return $this->db->get();
        }

        public function konfirmasi($idEvent, $data){
            $this->db->where('idEvent', $idEvent);
            $this->db->update('event', $data);
        }        

        public function hapus($idEvent){
            $this->db->where('idEvent', $idEvent);
            $this->db->delete('event');
        }

}