<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi_barang extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('model_barang');
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') != '') {
			$data['jenistahun'] = $this->model_barang->jenis_tahunbarang();
			$data['jenisbulan'] = $this->model_barang->jenis_bulanbarang();
			$data['barang'] = $this->model_barang->tampil_databarang();
			$data['ruangan'] = $this->model_barang->tampil_datagedung();
            $this->load->view('kondisi_barang',$data);
        }
        else {
            redirect(base_url());
        }
    }

	/* Controller Input, Edit, Hapus Data*/
	
	/* Controller Kondisi Barang*/
	public function input_barang(){
		$namabarang = $this->input->post('namabarang');
		$namaruangan = $this->input->post('namaruangan');
		$jumlahbarang = $this->input->post('jumlahbarang');
		$statusbarang = $this->input->post('statusbarang');
		$kondisibarang = $this->input->post('kondisibarang');
		$catatanbarang = $this->input->post('catatanbarang');
		$saranbarang = $this->input->post('saranbarang');
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
		$databarang = array(
		'Nama_Barang' => $this->input->post('namabarang'),
		'Waktu_Report' => $waktu
		);
        $cekrecord = $this->model_barang->cek_record($databarang);
		if($cekrecord->num_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data barang '.$namabarang.' sudah ada. Silahkan menggunakan nama barang yang lain</div>');
            redirect(base_url('kondisi_barang'));
        }
        else {
            $id_rand = substr(str_shuffle ("abcdefghijklmnopqrstuvwxyz1234567890"),0,4);
			$idbarang = "R$id_rand";
			$data = array(
			'ID_Barang' => $idbarang,
			'Nama_Barang' => $namabarang,
			'Nama_Ruangan' => $namaruangan,
			'Jumlah_Barang' => $jumlahbarang,
			'Status_Barang' => $statusbarang,
			'Kondisi_Barang' => $kondisibarang,
			'Catatan_GA_Barang' => $catatanbarang,
			'Saran_Barang' => $saranbarang,
			'Waktu_Report' => $waktu
				);
			$this->model_barang->input_databarang($data);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data barang '.$namabarang.' berhasil disimpan.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data barang '.$namabarang.' gagal disimpan.</div>');		
			};
			redirect(base_url('kondisi_barang'));
        }
	}
	public function edit_barang($idbarang){
		$namabarang = $this->input->post('namabarang');
		$namaruangan = $this->input->post('namaruangan');
		$jumlahbarang = $this->input->post('jumlahbarang');
		$statusbarang = $this->input->post('statusbarang');
		$kondisibarang = $this->input->post('kondisibarang');
		$catatanbarang = $this->input->post('catatanbarang');
		$saranbarang = $this->input->post('saranbarang');
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
			'Nama_Barang' => $namabarang,
			'Nama_Ruangan' => $namaruangan,
			'Jumlah_Barang' => $jumlahbarang,
			'Status_Barang' => $statusbarang,
			'Kondisi_Barang' => $kondisibarang,
			'Catatan_GA_Barang' => $catatanbarang,
			'Saran_Barang' => $saranbarang,
			'Waktu_Report' => $waktu
			);
		$this->model_barang->edit_databarang($data,"ID_Barang",$idbarang);
		if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data barang '.$namabarang.' berhasil diperbaharui.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data barang '.$namabarang.' gagal diperbaharui.</div>');		
			};
		redirect(base_url('kondisi_barang'));
	}
	public function hapus_barang($idbarang){
		$this->model_barang->hapus_databarang("ID_Barang",$idbarang);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data barang berhasil dihapus.</div>');
		} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data barang gagal dihapus.</div>');	
		};
		redirect(base_url('kondisi_barang'));
	}
	/* End Controller Kondisi Barang*/
	
	/* End Controller Input, Edit, Hapus Data*/
}
