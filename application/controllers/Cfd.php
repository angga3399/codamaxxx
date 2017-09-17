<?php 
    class cfd extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model('M_admin');
            $this->load->model('M_panitia');
            $this->load->model('M_cfd');
            $this->load->library(array('form_validation','session'));
            $this->load->database();
            $this->load->helper('url');
        }

        //cek
        public function kelolacfd(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                $data['datacfd'] = $this->M_cfd->tampil()->result();
                $data['isi'] = 'admin/kelolacfd';

                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }
        }

        //cek
        public function tambah_cfd(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                if ($this->input->post('simpan')) {

                } 
                else {
                    $kode = 'carfree';  
                    $data['kodeunik'] = $this->M_cfd->getkodeunik($kode);

                    $data['isi'] = 'admin/formtambahcfd';
                    $this->load->view('admin/home',$data);
                }
            }
            else{
                redirect('login');
            }
           
        }

        public function ubah($idCarFree){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                if ($this->input->post('simpan')) {
                     
                }
                else {
                    $data['isi'] = 'admin/formubahcfd';
                    $this->load->view('admin/home',$data);
                } 
            }
            else{
                redirect('login');
            }   
        }
    }

?>