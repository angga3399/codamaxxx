<?php 
    class event extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model('M_admin');
            $this->load->model('M_event');
            $this->load->model('M_cfd');
            $this->load->model('M_jadwal');
            $this->load->library(array('form_validation','session'));
            $this->load->database();
            $this->load->helper('url');
        }

        public function kelolaevent(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                $data['data'] = $this->M_event->tampil();

                $data['isi'] = 'admin/aktivasiacara';
                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }
        }

        public function dataacaraaktif(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                $data['data'] = $this->M_event->tampil();

                $data['isi'] = 'admin/dataacaraaktif';
                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }
        }

        public function dataacarabelumaktif(){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                $data['data'] = $this->M_event->tampil();

                $data['isi'] = 'admin/dataacarabelumaktif';
                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }
        }

        public function tampil($idEvent){
            $data['nama_admin']    = $this->session->userdata('nama_admin');      
            
            if ($data['nama_admin'] != NULL) {
                $data['event'] = $this->M_event->getActivasi($idEvent)->row();

                $data['isi'] = 'admin/tampilaktivasiacara';
                $this->load->view('admin/home',$data);
            }
            else{
                redirect('login');
            }            
        }

        public function konfirmasi(){
            $idEvent = $this->input->post('idEvent');
            if ($this->input->post('konfirmasi')) {
                $data['status'] = "Aktif";
                $query = $this->M_event->konfirmasi($idEvent, $data);
                $this->session->set_flashdata('info', 'Data berhasil dikonfirmasi');
                redirect('admin/aktivasiacara');
            }
            else{
                $data['status'] = "Belum Aktif";
                $query = $this->M_event->konfirmasi($idEvent, $data);
                $this->session->set_flashdata('salah', 'Data event ditolak');
                redirect('admin/aktivasiacara');
            }
        }

        public function hapus($idEvent){
            $this->M_event->hapus($idEvent);

            $this->session->set_flashdata('info', 'Data Event Dihapus!');
            redirect(base_url('admin/aktivasiacara'));
        }
    }

?>