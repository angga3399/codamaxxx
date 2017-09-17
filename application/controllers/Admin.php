<?php 
    class admin extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model('M_admin');
            $this->load->model('M_panitia');
            $this->load->library(array('form_validation','session'));
            $this->load->database();
            $this->load->helper('url');
        }

        //tampilan
        public function beranda(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                $data['isi'] = 'admin/beranda';
                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }
        }

        //profil
        public function profil(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');   
            $idAdmin = $this->session->userdata('id_admin'); 
            
            if ($data['nama_admin'] != NULL) {
                $data['person'] = $this->M_admin->tampilPerson($idAdmin);
                $data['isi'] = 'admin/profile';
                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }         
        }

        public function kelolaadmin(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');   
            
            if ($data['nama_admin'] != NULL) {
                $data['data'] = $this->M_admin->tampil()->result_object();
                $data['isi'] = 'admin/kelolaadmin';
                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }         

        }


        public function tambah()
        { 
            $data['nama_admin']    = $this->session->userdata('nama_admin');

            if ($data['nama_admin'] != NULL) {
                if ($this->input->post('simpan')) {
                     if (($this->input->post('katasandi')) == ($this->input->post('verkatasandi'))) {
                         $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
                         $this->form_validation->set_rules('email', 'email', 'required|trim');
                         $this->form_validation->set_rules('katasandi', 'Kata Sandi', 'required|trim');
                         $this->form_validation->set_rules('verkatasandi', 'Verifikasi Kata Sandi', 'required|trim');

                         if ($this->form_validation->run() === FALSE) {
                            $kode = 'admin';  
                            $data['kodeunik'] = $this->M_admin->getkodeunik($kode);

                            $data['isi'] = 'admin/formtambahadmin';
                            $this->load->view('admin/home',$data);
                         }
                         else {
                             $query = $this->M_admin->tambah_admin();

                             if ($query) {
                                $this->session->set_flashdata('info', 'Data berhasil ditambah');
                                redirect('admin/kelolaadmin');
                             }
                         } 
                     } else {
                            $kode = 'admin';  
                            $data['kodeunik'] = $this->M_admin->getkodeunik($kode);

                            $this->session->set_flashdata('peringatan', 'Verifikasi Kata Sandi Tidak Sama !');
                            $data['isi'] = 'admin/formtambahadmin';
                            $this->load->view('admin/home',$data);
                        
                     }
                    
                } 
                else {
                    $kode = 'admin';  
                    $data['kodeunik'] = $this->M_admin->getkodeunik($kode);

                    $data['isi'] = 'admin/formtambahadmin';
                    $this->load->view('admin/home',$data);
                } 
            }
            else{
                redirect('login');
            }
            
        }

        //cek
        public function ubah($idAdmin){
            $data['nama_admin'] = $this->session->userdata('nama_admin');

            if ($data['nama_admin'] != NULL) {
                if ($this->input->post('simpanakun')) {
                    if ($this->input->post('katasandi') == NULL) {
                        $this->session->set_flashdata('kesalahanakun', 'Isi Kata Sandi Lama!');
                        redirect('admin/kelolaadmin/ubah/'.$idAdmin.'');
                        break;
                    }

                    $katasandilama = md5($this->input->post('katasandi'));
                    $cekAdmin   = $this->M_admin->getPassword($katasandilama);

                    if ($cekAdmin->num_rows() == 1 ) {
                        $data1['namaAdmin'] = $this->input->post('namaAdmin');
                        $data1['email'] = $this->input->post('email');
                       
                        $idAdmin=$this->input->post('idAdmin');
                        $this->M_admin->ubah_admin($idAdmin, $data1);

                        $this->session->set_flashdata('info', 'Data berhasil diubah');
                        redirect('admin/kelolaadmin');
                    }else
                    {
                        $this->session->set_flashdata('kesalahanakun', 'Kata Sandi Lama Salah !');
                        redirect('admin/kelolaadmin/ubah/'.$idAdmin.'');
                        break;
                    }                 
                }
                else if ($this->input->post('simpankatasandi')){
                    $katasandilama = md5($this->input->post('katasandilama'));
                    $cekAdmin   = $this->M_admin->getPassword($katasandilama);

                    if ($katasandilama == NULL) {
                        $this->session->set_flashdata('kesalahankatasandi', 'Isi Kata Sandi Lama!');
                        redirect('admin/kelolaadmin/ubah/'.$idAdmin.'');
                    }else if ($cekAdmin->num_rows() == 1) {
                        $katasandibaru = md5($this->input->post('katasandi'));
                        $verkatasandi = md5($this->input->post('verkatasandi'));

                        if ($katasandibaru == $verkatasandi) {
                            $data1['password'] = $verkatasandi;
                            
                            $idAdmin=$this->input->post('idAdmin');
                            $this->M_admin->ubah_admin($idAdmin, $data1);

                            $this->session->set_flashdata('info', 'Data berhasil diubah');
                            redirect('admin/kelolaadmin');

                        }else {
                            $this->session->set_flashdata('kesalahankatasandi', 'Kata Sandi Baru dan Verifikasi Kata Sandi Tidak Sama!');
                            redirect('admin/kelolaadmin/ubah/'.$idAdmin.'');
                        }

                    }else {
                        $this->session->set_flashdata('kesalahankatasandi', 'Kata Sandi Lama Salah!');
                        redirect('admin/kelolaadmin/ubah/'.$idAdmin.'');
                    }
                }   
                else{
                    $data['admin'] = $this->M_admin->select_by_id($idAdmin)->row();

                    $data['isi'] = 'admin/formubahadmin';
                    $this->load->view('admin/home', $data);
                }
            }
            else{
                redirect('login');
            }  

            
        }

        public function hapus($idAdmin){
            $this->M_admin->hapus_admin($idAdmin);

            $this->session->set_flashdata('info', 'Data Admin Dihapus!');
            redirect(base_url('admin/kelolaadmin'));
        }

    }
?>