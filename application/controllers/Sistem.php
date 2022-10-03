<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('main_model');
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') == '') {
            $this->load->view('login');
        }
        else {
            redirect(base_url('dashboard'));
        }
    }
	
	public function checkLogin() {
        $datalogin = array(	'Id_User'   => $this->input->post('username'),
							'Password'  => md5($this->input->post('password')),
					);
        $hasil = $this->main_model->cek_user($datalogin);

        if($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $sess = array(  'username'  => $row->Id_User,
                                'password'  => $row->Password,
								'nama'		=> $row->Nama_User,
                                'level'     => $row->Jabatan
                    );

                $this->session->set_userdata($sess);
            }
            redirect(base_url('dashboard'));
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }
	
	function logout() {
        $this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('nama');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect(base_url());
    }
}