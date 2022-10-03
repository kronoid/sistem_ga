<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biaya_rumahtangga extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('model_biayarumahtangga');
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') != '') {
			$data['jenistahun'] = $this->model_biayarumahtangga->jenis_tahunbiayarumahtangga();
			$data['jenisbulan'] = $this->model_biayarumahtangga->jenis_bulanbiayarumahtangga();
			$data['biayart'] = $this->model_biayarumahtangga->tampil_databiayarumahtangga();
            $this->load->view('biaya_rumahtangga',$data);
        }
        else {
            redirect(base_url());
        }
    }

	/* Controller Input, Edit, Hapus Data*/
	
	/* Controller Biaya Rumah Tangga*/
	public function input_datarumahtangga(){
		$namakebutuhan = $this->input->post('namakebutuhan');
		$jumlahkebutuhan = $this->input->post('jumlahkebutuhan');
		$hargakebutuhan = $this->input->post('hargakebutuhan');
		$tglbayar = $this->input->post('tanggalbayar');
		$pecah = explode(" ",$tglbayar);
		switch($pecah[1]){
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
		$tanggalbayar = $pecah[2]."/".$bulan."/".$pecah[0];
		$id_rand = substr(str_shuffle ("abcdefghijklmnopqrstuvwxyz1234567890"),0,3);
		$idkebutuhan = "RT$id_rand";
		$data = array(
			'ID_PembayaranRT' => $idkebutuhan,
			'Nama_Barang' => $namakebutuhan,
			'Jumlah_Barang' => $jumlahkebutuhan,
			'Total_Harga' => $hargakebutuhan,
			'Tgl_Beli' => $tanggalbayar
			);
		$this->model_biayarumahtangga->input_databiayarumahtangga($data);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Berhasil !</strong> Data kebutuhan '.$namakebutuhan.' berhasil disimpan.</div>');
		} else {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data kebutuhan '.$namakebutuhan.' gagal disimpan.</div>');
			
		};
		redirect(base_url('biaya_rumahtangga'));
	}
	public function edit_datarumahtangga($idkebutuhan){
		$namakebutuhan = $this->input->post('namakebutuhan');
		$jumlahkebutuhan = $this->input->post('jumlahkebutuhan');
		$hargakebutuhan = $this->input->post('hargakebutuhan');
		$tglbayar = $this->input->post('tanggalbayar');
		$pecah = explode(" ",$tglbayar);
		switch($pecah[1]){
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
		$tanggalbayar = $pecah[2]."/".$bulan."/".$pecah[0];
		$data = array(
			'Nama_Barang' => $namakebutuhan,
			'Jumlah_Barang' => $jumlahkebutuhan,
			'Total_Harga' => $hargakebutuhan,
			'Tgl_Beli' => $tanggalbayar
			);
		$this->model_biayarumahtangga->edit_databiayarumahtangga($data,"ID_PembayaranRT",$idkebutuhan);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data kebutuhan berhasil diperbaharui.</div>');
		} else {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data kebutuhan gagal diperbaharui.</div>');
			
		};
		redirect(base_url('biaya_rumahtangga'));
	}
	public function hapus_datarumahtangga($idkebutuhan){
		$this->model_biayarumahtangga->hapus_databiayarumahtangga("ID_PembayaranRT",$idkebutuhan);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data kebutuhan berhasil dihapus.</div>');
		} else {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data kebutuhan gagal dihapus.</div>');
			
		};
		redirect(base_url('biaya_rumahtangga'));
	}
	/* End Controller Biaya Rumah Tangga*/
	
	/* End Controller Input, Edit, Hapus Data*/
}
