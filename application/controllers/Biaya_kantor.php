<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biaya_kantor extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('model_biayakantor');
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') != '') 
		{
			$data['jenistahun'] = $this->model_biayakantor->jenis_tahunbiayakantor();
			$data['jenisbulan'] = $this->model_biayakantor->jenis_bulanbiayakantor();
			$data['biayakantor'] = $this->model_biayakantor->tampil_databiayakantor();
            $this->load->view('biaya_kantor',$data);
        }
        else 
		{
            redirect(base_url());
        }
    }
	
	/* Controller Input, Edit, Hapus Data*/
	
	/* Controller Biaya Rumah Tangga*/
	public function input_databiayakantor(){
		$namapembayaran = $this->input->post('namapembayaran');
		$tanggalbayar = $this->input->post('tglbayar');
		$totalpembayaran = $this->input->post('totalpembayaran');
		$pecah = explode(" ",$tanggalbayar);
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
		$idpembayaran = "RT$id_rand";
		$data = array(
			'ID_Pembayaran' => $idpembayaran,
			'Nama_Pembayaran' => $namapembayaran,
			'Tgl_Pembayaran' => $tanggalbayar,
			'Total_Pembayaran' => $totalpembayaran
			);
		$this->model_biayakantor->input_databiayakantor($data);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data ruangan '.$namapembayaran.' berhasil disimpan.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data ruangan '.$namapembayaran.' gagal disimpan.</div>');		
			};
		redirect(base_url('biaya_kantor'));
	}
	public function edit_databiayakantor($idpembayaran){
		$namapembayaran = $this->input->post('namapembayaran');
		$totalpembayaran = $this->input->post('totalpembayaran');
		$tanggalbayar = $this->input->post('tglbayar');
		$pecah = explode(" ",$tanggalbayar);
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
			'Nama_Pembayaran' => $namapembayaran,
			'Tgl_Pembayaran' => $tanggalbayar,
			'Total_Pembayaran' => $totalpembayaran
			);
		$this->model_biayakantor->edit_databiayakantor($data,"ID_Pembayaran",$idpembayaran);
		if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data biaya kantor berhasil diperbaharui.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data biaya kantor gagal diperbaharui.</div>');		
			};
		redirect(base_url('biaya_kantor'));
	}
	public function hapus_databiayakantor($idpembayaran){
		$this->model_biayakantor->hapus_databiayakantor("ID_Pembayaran",$idpembayaran);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notifikasi','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> Data biaya kantor berhasil dihapus.</div>');
			} else { 
				$this->session->set_flashdata('notifikasi','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Failed!</strong> Data biaya kantor gagal dihapus.</div>');		
			};
		redirect(base_url('biaya_kantor'));
	}
}
