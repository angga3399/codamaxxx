<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_jadwal extends CI_Model{
        
        function inputJadwal() {
            $tgl = $this->input->post('tgl');
            
            $tempat    = $this->session->userdata('tempat');
            $panitia   = $this->m_panitia->getPanitia($tempat);
            $id = $panitia->idCarFree;

            $q = $this->db->query("SELECT MAX(RIGHT(idJadwal,2)) AS idmax FROM jadwal");
            $kd = ""; //kode awal
            if($q->num_rows()>0){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                    $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
                }
            }else{ //jika data kosong diset ke kode awal
                $kd = "01";
            }
            $kar = "J"; //karakter depan kodenya
            //gabungkan string dengan kode yang telah dibuat tadi
            
            $data = array(
                'idJadwal'      =>$kar.$kd,
                'tgl'           =>$tgl,
                'idCarFree'     =>$id
            );

            $this->db->insert('jadwal',$data);
        }

        function getJadwal($tgl){
            $this->db->select('*');
            $this->db->from('jadwal');
            $this->db->where('tgl', $tgl);
            $query = $this->db->get();
            return $query->row();
        }   
        
}