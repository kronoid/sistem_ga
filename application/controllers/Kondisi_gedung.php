<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi_gedung extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('model_gedung');
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') != '') {
			$data['jenistahun'] = $this->model_gedung->jenis_tahungedung();
			$data['jenisbulan'] = $this->model_gedung->jenis_bulangedung();
			$data['gedung'] = $this->model_gedung->tampil_datagedung();
			$this->load->view('kondisi_gedung',$data);
        }
        else {
            redirect(base_url());
        }
    }

	/* Controller Input, Edit, Hapus Data*/
	
	/* Controller Kondisi Gedung*/
	public function input_gedung(){
		$namaruangan = $this->input->post('namaruangan');
		$statusruangan = $this->input->post('statusruangan');
		$kondisiruangan = $this->input->post('kondisiruangan');
		$catatanruangan = $this->input->post('catatanruangan');
		$saranruangan = $this->input->post('saranruangan');
		$waktureport = $this->input->post('waktureport');
		$pecah = explode(" ",$waktureport);
		switch($pecah[0]){
			case "January":
			$bulan = "01";break;
			case "February":
			$bulan = "02";break;
			case "March":
			$bulan = "03";break;
			case "April":
			$bulan = "04";break;
			case "May":
			$bulan = "05";break;
			case "June":
			$bulan = "06";break;
			case "July":
			$bulan = "07";break;
			case "August":
			$bulan = "08";break;
			case "September":
			$bulan = "09";break;
			case "October":
			$bulan = "10";break;
			case "November":
			$bulan = "11";break;
			case "December":
			$bulan = "12";break;
		}
		$waktu = $pecah[1]."/".$bulan."/01";
		$dataruangan = array(
		'Nama_Ruangan' => $this->input->post('namaruangan'),
		'Waktu_Report' => $waktu
		);
        $cekrecord = $this->model_gedung->cek_record($dataruangan);
		if($cekrecord->num_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data ruangan '.$namaruangan.' sudah ada. Silahkan menggunakan nama ruangan yang lain</div>');
            redirect(base_url('kondisi_gedung'));
        }
        else {
            $id_rand = substr(str_shuffle ("abcdefghijklmnopqrstuvwxyz1234567890"),0,4);
			$idruangan = "R$id_rand";
			$data = array(
				'ID_Ruangan' => $idruangan,
				'Nama_Ruangan' => $namaruangan,
				'Status_Ruangan' => $statusruangan,
				'Kondisi_Ruangan' => $kondisiruangan,
				'Catatan_GA_Ruangan' => $catatanruangan,
				'Saran_Ruangan' => $saranruangan,
				'Waktu_Report' => $waktu
				);
			$this->model_gedung->input_datagedung($data);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data ruangan '.$namaruangan.' berhasil disimpan.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data ruangan '.$namaruangan.' gagal disimpan.</div>');		
			};
			redirect(base_url('kondisi_gedung'));
        }
		
	}
	public function edit_gedung($idruangan){
		$namaruangan = $this->input->post('namaruangan');
		$statusruangan = $this->input->post('statusruangan');
		$kondisiruangan = $this->input->post('kondisiruangan');
		$catatanruangan = $this->input->post('catatanruangan');
		$saranruangan = $this->input->post('saranruangan');
		$waktureport = $this->input->post('waktureport');
		$pecah = explode(" ",$waktureport);
		switch($pecah[0]){
			case "January":
			$bulan = "01";break;
			case "February":
			$bulan = "02";break;
			case "March":
			$bulan = "03";break;
			case "April":
			$bulan = "04";break;
			case "May":
			$bulan = "05";break;
			case "June":
			$bulan = "06";break;
			case "July":
			$bulan = "07";break;
			case "August":
			$bulan = "08";break;
			case "September":
			$bulan = "09";break;
			case "October":
			$bulan = "10";break;
			case "November":
			$bulan = "11";break;
			case "December":
			$bulan = "12";break;
		}
		$waktu = $pecah[1]."/".$bulan."/01";
		$data = array(
			'Nama_Ruangan' => $namaruangan,
			'Status_Ruangan' => $statusruangan,
			'Kondisi_Ruangan' => $kondisiruangan,
			'Catatan_GA_Ruangan' => $catatanruangan,
			'Saran_Ruangan' => $saranruangan,
			'Waktu_Report' => $waktu
			);
		$this->model_gedung->edit_datagedung($data,"ID_Ruangan",$idruangan);
		if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data ruangan berhasil diperbaharui.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data ruangan gagal diperbaharui.</div>');		
			};
		redirect(base_url('kondisi_gedung'));
	}
	public function hapus_gedung($idruangan){
		$this->model_gedung->hapus_datagedung("ID_Ruangan",$idruangan);
		if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data ruangan berhasil dihapus.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data ruangan gagal dihapus.</div>');		
			};
		redirect(base_url('kondisi_gedung'));
	}
	/* End Controller Kondisi Gedung*/
	
	/* End Controller Input, Edit, Hapus Data*/
}
