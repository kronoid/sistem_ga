<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi_kendaraan extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('model_kendaraan');
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') != '') {
			$data['jenistahun'] = $this->model_kendaraan->jenis_tahunkendaraan();
			$data['jenisbulan'] = $this->model_kendaraan->jenis_bulankendaraan();
			$data['kendaraan'] = $this->model_kendaraan->tampil_datakendaraan();
            $this->load->view('kondisi_kendaraan', $data);
        }
        else {
            redirect(base_url());
        }
    }

	/* Controller Input, Edit, Hapus Data*/
	
	/* Controller Kondisi Kendaraan*/
	public function input_kendaraan(){
		$namakendaraan = $this->input->post('namakendaraan');
		$nomorpolisi = $this->input->post('nomorpolisi');
		$masaberlakuSTNK = $this->input->post('masaberlakuSTNK');
		$masaberlakupajak = $this->input->post('masaberlakupajak');
		$kondisibadankendaraan = $this->input->post('kondisibadankendaraan');
		$kondisibankendaraan = $this->input->post('kondisibankendaraan');
		$kondisiinteriorkendaraan = $this->input->post('kondisiinteriorkendaraan');
		$kondisimesinkendaraan = $this->input->post('kondisimesinkendaraan');
		$kondisipanelkendaraan = $this->input->post('kondisipanelkendaraan');
		$catatankendaraan = $this->input->post('catatankendaraan');
		$sarankendaraan = $this->input->post('sarankendaraan');
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
		$datakendaraan = array(
		'Nomor_Polisi' => $this->input->post('nomorpolisi'),
		'Waktu_Report' => $waktu
		);
        $cekrecord = $this->model_kendaraan->cek_record($datakendaraan);
		if($cekrecord->num_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data kendaraan dengan nomor polisi '.$nomorpolisi.' sudah ada. Silahkan menggunakan nomor polisi yang lain</div>');
            redirect(base_url('kondisi_kendaraan'));
        }
        else {
            $id_rand = substr(str_shuffle ("abcdefghijklmnopqrstuvwxyz1234567890"),0,4);
			$idkendaraan = "R$id_rand";
			$data = array(
			'ID_Kendaraan' => $idkendaraan,
			'Nama_Kendaraan' => $namakendaraan,
			'Nomor_Polisi' => $nomorpolisi,
			'Masa_Berlaku_STNK' => $masaberlakuSTNK,
			'Masa_Berlaku_Pajak' => $masaberlakupajak,
			'Kondisi_Badan_Kendaraan' => $kondisibadankendaraan,
			'Kondisi_Ban_Kendaraan' => $kondisibankendaraan,
			'Kondisi_Interior_Kendaraan' => $kondisiinteriorkendaraan,
			'Kondisi_Mesin_Kendaraan' => $kondisimesinkendaraan,
			'Kondisi_Panel_Kendaraan' => $kondisipanelkendaraan,
			'Catatan_GA_Kendaraan' => $catatankendaraan,
			'Saran_Kendaraan' => $sarankendaraan,
			'Waktu_Report' => $waktu
				);
			$this->model_kendaraan->input_datakendaraan($data);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data kendaraan '.$namakendaraan.' berhasil disimpan.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data kendaraan '.$namakendaraan.' gagal disimpan.</div>');		
			};
			redirect(base_url('kondisi_kendaraan'));
        }
			
			
	}
	public function edit_kendaraan($idkendaraan){
		$masaberlakuSTNK = $this->input->post('masaberlakuSTNK');
		$masaberlakupajak = $this->input->post('masaberlakupajak');
		$kondisibadankendaraan = $this->input->post('kondisibadankendaraan');
		$kondisibankendaraan = $this->input->post('kondisibankendaraan');
		$kondisiinteriorkendaraan = $this->input->post('kondisiinteriorkendaraan');
		$kondisimesinkendaraan = $this->input->post('kondisimesinkendaraan');
		$kondisipanelkendaraan = $this->input->post('kondisipanelkendaraan');
		$catatankendaraan = $this->input->post('catatankendaraan');
		$sarankendaraan = $this->input->post('sarankendaraan');
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
			'Masa_Berlaku_STNK' => $masaberlakuSTNK,
			'Masa_Berlaku_Pajak' => $masaberlakupajak,
			'Kondisi_Badan_Kendaraan' => $kondisibadankendaraan,
			'Kondisi_Ban_Kendaraan' => $kondisibankendaraan,
			'Kondisi_Interior_Kendaraan' => $kondisiinteriorkendaraan,
			'Kondisi_Mesin_Kendaraan' => $kondisimesinkendaraan,
			'Kondisi_Panel_Kendaraan' => $kondisipanelkendaraan,
			'Catatan_GA_Kendaraan' => $catatankendaraan,
			'Saran_Kendaraan' => $sarankendaraan,
			'Waktu_Report' => $waktu
				);
			$this->model_kendaraan->edit_datakendaraan($data,'ID_Kendaraan',$idkendaraan);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data kendaran berhasil diperbaharui.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data kendaraan gagal diperbaharui.</div>');		
			};
			redirect(base_url('kondisi_kendaraan'));
	}
	public function hapus_kendaraan($idkendaraan,$namakendaraan){
		$kendaraan = str_replace("%20"," ", $namakendaraan);
		$this->model_kendaraan->hapus_datakendaraan("ID_Kendaraan",$idkendaraan);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data kendaraan berhasil dihapus.</div>');	
		} else {
			$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data kendaraan gagal dihapus.</div>');	
		};
		redirect(base_url('kondisi_kendaraan'));
	}
	/* End Controller Kondisi Kendaraan*/
	
	/* End Controller Input, Edit, Hapus Data*/
}
