<?php 
    class login extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model(array('m_login','m_panitia'));
            $this->load->library(array('form_validation','session'));
            $this->load->database();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('encrypt');
        }

        public function index(){
            $this->load->view('login/login');
        }
        
        public function login_act(){
            if ($this->session->userdata('login_panitia')== 'berhasil') {
                redirect('panitia/home');
            }else{
                $email      = $this->input->post('email');
                $password   = md5($this->input->post('password'));
                $cekPanitia = $this->m_login->getPanitia($email, $password,1);
                $cekAdmin   = $this->m_login->getAdmin($email, $password,1);

                if($cekPanitia->num_rows() == 1) {

                    foreach ($cekPanitia->result() as $c) {

                            $data_user['login_panitia']       = 'berhasil';
                            $data_user['email_panitia']       = $c->email;
                            $data_user['tempat']              = $c->namaCFD;
                            $data_user['id']                  = $c->noKtp;
                            
                            $this->session->set_userdata($data_user);    
                            if ($c->noKtp== NULL) {
                                redirect("panitia/profil/");
                            }
                                redirect('panitia/home/');
                    }   
                }elseif($cekAdmin->num_rows() == 1) {
                    foreach ($cekAdmin->result() as $c) {
                            $data_user['login_admin']          = 'berhasil';
                            $data_user['nama_admin']           = $c->namaAdmin;
                            $data_user['email_admin']          = $c->email;
                            $data_user['id_admin']             = $c->idAdmin;
                        
                            $this->session->set_userdata($data_user);
                            redirect('admin/beranda');
                    }
                }else{
                    $pesan['pesan'] ='Username atau Password Salah!!!';
                    $this->load->view('login/login',$pesan);   
                }
                }
        }
        
        public function lupa_password(){
            $this->load->view('login/lost');
        }

        // Send Gmail to another user
        public function sendMail() {
            $receiver_email = $this->input->post('to_email');
            
            $cekPanitia = $this->m_panitia->getEmailPanitia($receiver_email);
            if($cekPanitia->num_rows() == 1) {

                //password anyar
                $pass="129FAasdsk25kwBjakjDlff"; 
                $panjang='8'; 
                $len=strlen($pass);
                $start=$len-$panjang; 
                $xx=rand('0',$start);
                $yy=str_shuffle($pass);
                $passwordbaru=substr($yy, $xx, $panjang);
                
                // Configure email library
               $config = Array(  
                'protocol'  => 'smtp',  
                'smtp_host' => 'ssl://smtp.googlemail.com',  
                'smtp_port' => 465,  
                'smtp_user' => 'tugaskampusunikom@gmail.com',   
                'smtp_pass' => 'fucktugas',   
                'mailtype'  => 'html',   
                'charset'   => 'iso-8859-1'  
               ); 

                // Load email library and passing configured values to email library 
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                
                // Sender email address
                $this->email->from('tugaskampusunikom@gmail.com', 'CFD Kota Bandung');
                // Receiver email address
                $this->email->to($receiver_email);
                // Subject of email
                $this->email->subject('Lupa Password');
                // Message in email
                $this->email->message(
        "<html>
            <style>
            
            .header{
                border-radius:3px;
                padding: 6px;
                text-align:center;
                color: #fff;
            }

            .doff{
                color:#555;
            }
            </style>
            <body>
            
                <div class=\"header\">
                    <h3>Developer Car Free Day<br><small>Kota Bandung</small></h3>
                </div><br>
                Kami telah mengatur ulang password Anda, Berikut Data beserta password baru Anda :<br><br>
                <table>
                <tr>
                    <td><b>Password Baru</b><td>: <b>".$passwordbaru."</b></td></td>
                </tr>
                </table>
                    <p>Anda dapat login kembali dengan password baru Anda ke <a href=\"http://localhost/cfd/login/\" target=\"_blank\" style=\"text-decoration:none;font-weight:bold;\">Website Administrator</a>.</p>
                    <p><br><br>
                Developer CODAMA<br>
                    Universitas Komputer Indonesia
                    </p>
                    <center>
                    <small>
                    <p class=\"doff\">All Rights Reserved &copy; ".date("Y")." CODAMA.<br>
                    <a href=\"http://www.himaif.unikom.ac.id/\" target=\"_blank\" style=\"text-decoration:none;\">Website Utama</a></p>
                    </small>
                    </center>
            
                </body>
                </html>"
                    );

                if ($this->email->send()) {
                   $pesan['pesan'] ='Email Terkirim';
                   
                   $data['password'] = md5($passwordbaru);

                   $this->m_login->ubahpassword($receiver_email, $data);

                } else {
                    $pesan['pesan'] ='Email Tidak Terkirim';
                }
            }else{
                $pesan['pesan'] ='Email Tidak Di Temukan';
            }
            $this->load->view('login/lost',$pesan);
        }
    }
?>