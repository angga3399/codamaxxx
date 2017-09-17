<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_panitia extends CI_Model{

        //ATR
        function data_panitia(){
            $this->db->select("*");
            $this->db->FROM("panitia");
            $this->db->join("carfree","panitia.idCarFree=carfree.idCarFree");
            return $this->db->get()->result();
        }

        public function data_admin($username){
            $this->db->select('*');
            $this->db->where('username', $username);
            $query = $this->db->get('admin');
            return $query->row();
        }   

        function getEmailPanitia($email){
            $this->db->select('*');
            $this->db->from('panitia');
            $this->db->where('email', $email);
            $query = $this->db->get();
            return $query;
        }

        function getPanitia($tempat){
            $this->db->select('*');
            $this->db->from('panitia');
            $this->db->join("carfree","panitia.idCarFree=carfree.idCarFree");
            $this->db->where('carfree.namaCFD', $tempat);
            return $this->db->get()->row();
        }

        function update($id)
        {
            $no_ktp     = $this->input->post('no_ktp');
            $nama       = $this->input->post('nama');
            $tgl_lahir  = $this->input->post('tgl');
            $alamat     = $this->input->post('alamat');
            $kontak     = $this->input->post('kontak');
            $email      = $this->input->post('email');
            $pass       = $this->input->post('pass');
            $konf_pass  = $this->input->post('konf_pass');
                 
            $this->load->library('upload');
            $config['upload_path'] = './assets/img/panitia'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['file_name'] = $no_ktp; //nama yang terupload nantinya
            $this->upload->initialize($config);
            if($_FILES['foto']['name'])
            {
                if ($this->upload->do_upload('foto'))
                {
                    $gbr = $this->upload->data();
                    $data = array(
                        'noKtp'       =>$no_ktp,
                        'namaPanitia' =>$nama,
                        'tgl'         =>$tgl_lahir,
                        'alamat'      =>$alamat,
                        'kontak'      =>$kontak,
                        'password'    =>md5($pass),
                        'foto'        =>$gbr['file_name']
                    );
                }
            }
          $this->db->set($data);
          $this->db->where('password', $id);
          $this->db->update('panitia');
       }

       function pengaturan($email)
        {
            $nama           = $this->input->post('panitia_nama');
            $tgl            = date('Y/m/d',strtotime($this->input->post('panitia_tgl')));
            $kontak         = $this->input->post('panitia_kontak');
            $alamat         = $this->input->post('panitia_alamat');
            $email          = $this->input->post('panitia_email');
            $sandi_baru     = $this->input->post('sandi_baru');
            
            $no_ktp     = $this->input->post('noKtp');
            $this->load->library('upload');
            $config['upload_path'] = './assets/img/panitia'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['file_name'] = $no_ktp; //nama yang terupload nantinya
            $this->upload->initialize($config);
            if($_FILES['foto']['name']!=NULL){
                    if ($this->upload->do_upload('foto'))
                    {
                        $gbr = $this->upload->data();
                        $data = array(
                            'foto'        =>$gbr['file_name']
                        );
                    }
            }elseif($_FILES['foto']['name']==NULL && $sandi_baru==NULL && $nama!=NULL){
                    $data = array(
                        'namaPanitia'   =>$nama,
                        'tgl'           =>$tgl,
                        'alamat'        =>$alamat,
                        'kontak'        =>$kontak,
                        'email'         =>$email
                    );
            }elseif($sandi_baru!=NULL){
                    $data = array(
                        'password'   =>md5($sandi_baru)
                    );
            }



          $this->db->set($data);
          $this->db->where('email', $email);
          $this->db->update('panitia');
            
            
       }

        //MAS
        public function tampil()
        {
             return $this->db->get('panitia');
        }

        function getData_Panitia($email){
            $this->db->select('*');
            $this->db->from('panitia');
            $this->db->where('email', $email);
            $query = $this->db->get();
            return $query;
        }

        function getDeskrip($email){
            $this->db->select('*');
            $this->db->FROM('panitia');
            $this->db->join('carfree','carfree.idCarFree=carfree.idCarFree');
            $this->db->join('admin','admin.idAdmin=admin.idAdmin');
            $this->db->where('panitia.email',$email);
            return $this->db->get();
        }

        function select_by_id($email){
            $this->db->select('*');
            $this->db->from('panitia');
            $this->db->where('email', $email);
            return $this->db->get();
        }

        function hapus_panitia($email){
            $this->db->where('email', $email);
            $this->db->delete('panitia');
        }

        function getkodeunik($kode) { 

            $q = $this->db->query("SELECT MAX(RIGHT(noKtp,2)) AS idmax FROM ".$kode);
            $kd = ""; //kode awal
            if($q->num_rows()>0){ //jika data ada
                foreach($q->result() as $k){
                    $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                    $kd = sprintf("%02s",$tmp); //kode ambil 4 karakter terakhir
                }
            }else{ //jika data kosong diset ke kode awal
                $kd = "01";
            }
            $kar = "P"; //karakter depan kodenya
            //gabungkan string dengan kode yang telah dibuat tadi
            return $kar.$kd;
        }
        
}