<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('model_user');
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') != '') {
			if($this->session->userdata('level') == 'General Affairs') {
				$data['akun'] = $this->model_user->tampil_datauser();
			$this->load->view('kelola_user',$data);
			}
			else {
				redirect(base_url());
			}
			
        }
        else {
            redirect(base_url());
        }
    }

	/* Controller Input, Edit, Hapus Data*/
	
	/* Controller Kondisi Akun*/
	public function input_user(){
		$iduser = $this->input->post('Id_User');
		$passworduser = md5($this->input->post('Password'));
		$namauser = $this->input->post('Nama_User');
		$jabatanuser = $this->input->post('Jabatan');
		$datauser = array('Id_User' => $this->input->post('iduser'));
        $cekrecord = $this->model_user->cek_record($datauser);
		if($cekrecord->num_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data user '.$namauser.' sudah ada. Silahkan menggunakan nama user yang lain</div>');
            redirect(base_url('user'));
        }
        else {
			$data = array(
				'Id_User' => $iduser,
				'Password' => $passworduser,
				'Nama_User' => $namauser,
				'Jabatan' => $jabatanuser
				);
			$this->model_user->input_datauser($data);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data user '.$namauser.' berhasil disimpan.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data user '.$namauser.' gagal disimpan.</div>');		
			};
			redirect(base_url('user'));
        }
		
	}
	public function edit_user($iduser){
		$passworduser = md5($this->input->post('passworduser'));
		$namauser = $this->input->post('namauser');
		$jabatanuser = $this->input->post('jabatanuser');
		$data = array(
			'Password' => $passworduser,
			'Nama_User' => $namauser,
			'Jabatan' => $jabatanuser
			);
		$this->model_user->edit_datauser($data,"Id_User",$iduser);
		if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data user dengan username berhasil diperbaharui.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data user dengan username gagal diperbaharui.</div>');		
			};
		redirect(base_url('user'));
	}
	public function hapus_user($iduser){
		$this->model_user->hapus_datauser("Id_User",$iduser);
		if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data user berhasil dihapus.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data user gagal dihapus.</div>');		
			};
		redirect(base_url('user'));
	}
	/* End Controller Kondisi Akun*/
	
	/* End Controller Input, Edit, Hapus Data*/
}
