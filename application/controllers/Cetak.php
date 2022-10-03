<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('model_cetak');
        $this->load->helper('url');
	}
	
	public function index(){
		redirect(base_url());
    }
	public function laporangedung($filtertabel){
		if($this->session->userdata('username') != '') {
				$pecah = explode("-",$filtertabel);
				if($pecah[0] > 12 && $pecah[0] < 1 ){
					redirect(base_url());
				}else{
					$filter = array('month(Waktu_Report)' => $pecah[0], 'year(Waktu_Report)' => $pecah[1]);
					$alias = "month(Waktu_Report) as bulan, year(Waktu_Report) as tahun";
					$data['cetak'] = $this->model_cetak->tampil_datacetak('kondisi_gedung',$filter,'Nama_Ruangan',$alias);
					$html = $this->load->view('cetak_gedung',$data,TRUE);
					$mpdf = new \Mpdf\Mpdf();
					$mpdf->SetFooter(''.'|{PAGENO}|'.'');
					$mpdf->WriteHTML($html);
					$namapdf = 'Laporan Kondisi Gedung ['.$pecah[0].'-'.$pecah[1].']';
					$mpdf->Output($namapdf, 'I');
				}
        }
        else {
            redirect(base_url());
        }
	}
	public function laporanbiayakantor($filtertabel){
		if($this->session->userdata('username') != '') {
				$pecah = explode("-",$filtertabel);
				if($pecah[0] > 12 && $pecah[0] < 1 ){
					redirect(base_url());
				}else{
					$filter = array('month(Tgl_Pembayaran)' => $pecah[0], 'year(Tgl_Pembayaran)' => $pecah[1]);
					$alias = "month(Tgl_Pembayaran) as bulan, year(Tgl_Pembayaran) as tahun";
					$data['cetak'] = $this->model_cetak->tampil_datacetak('pembayaran_kantor',$filter,'Nama_Pembayaran',$alias);
					$html = $this->load->view('cetak_biayakantor',$data,TRUE);
					$mpdf = new \Mpdf\Mpdf();
					$mpdf->SetFooter(''.'|{PAGENO}|'.''); //Add a footer for good measure
					$mpdf->WriteHTML($html); //write the HTML into PDF
					$namapdf = 'Laporan Biaya Kantor ['.$pecah[0].'-'.$pecah[1].']';
					$mpdf->Output($namapdf, 'I');
				}
        }
        else {
            redirect(base_url());
        }
	}
	public function laporanbiayarumahtangga($filtertabel){
		if($this->session->userdata('username') != '') {
				$pecah = explode("-",$filtertabel);
				if($pecah[0] > 12 && $pecah[0] < 1 ){
					redirect(base_url());
				}else{
					$filter = array('month(Tgl_Beli)' => $pecah[0], 'year(Tgl_Beli)' => $pecah[1]);
					$alias = "month(Tgl_Beli) as bulan, year(Tgl_Beli) as tahun";
					$data['cetak'] = $this->model_cetak->tampil_datacetak('pembayaran_rumahtangga',$filter,'Nama_Barang',$alias);
					$html = $this->load->view('cetak_biayarumahtangga',$data,TRUE);
					$mpdf = new \Mpdf\Mpdf();
					$mpdf->SetFooter(''.'|{PAGENO}|'.''); //Add a footer for good measure
					$mpdf->WriteHTML($html); //write the HTML into PDF
					$namapdf = 'Laporan Biaya Rumah Tangga ['.$pecah[0].'-'.$pecah[1].']';
					$mpdf->Output($namapdf, 'I');
				}
        }
        else {
            redirect(base_url());
        }
	}
	public function laporanbarang($filtertabel){
		if($this->session->userdata('username') != '') {
				$pecah = explode("-",$filtertabel);
				if($pecah[0] > 12 && $pecah[0] < 1 ){
					redirect(base_url());
				}else{
					$filter = array('month(Waktu_Report)' => $pecah[0], 'year(Waktu_Report)' => $pecah[1]);
					$alias = "month(Waktu_Report) as bulan, year(Waktu_Report) as tahun";
					$data['cetak'] = $this->model_cetak->tampil_datacetak('kondisi_barang',$filter,'Nama_Barang', $alias);
					$html = $this->load->view('cetak_barang',$data,TRUE);
					$mpdf=new \Mpdf\Mpdf();
					$mpdf->SetFooter(''.'|{PAGENO}|'.''); //Add a footer for good measure
					$mpdf->WriteHTML($html); //write the HTML into PDF
					$namapdf = 'Laporan Kondisi Barang ['.$pecah[0].'-'.$pecah[1].']';
					$mpdf->Output($namapdf, 'I');
				}
        }
        else {
            redirect(base_url());
        }
	}
	public function laporankendaraan($filtertabel){
		if($this->session->userdata('username') != '') {
				$pecah = explode("-",$filtertabel);
				if($pecah[0] > 12 && $pecah[0] < 1 ){
					redirect(base_url());
				}else{
					$filter = array('month(Waktu_Report)' => $pecah[0], 'year(Waktu_Report)' => $pecah[1]);
					$alias = "month(Waktu_Report) as bulan, year(Waktu_Report) as tahun";
					$data['cetak'] = $this->model_cetak->tampil_datacetak('kondisi_kendaraan',$filter,'Nama_Kendaraan', $alias);
					$html = $this->load->view('cetak_kendaraan',$data,TRUE);
					$mpdf=new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
					$mpdf->SetFooter(''.'|{PAGENO}|'.''); //Add a footer for good measure
					$mpdf->WriteHTML($html); //write the HTML into PDF
					$namapdf = 'Laporan Kondisi Kendaraan ['.$pecah[0].'-'.$pecah[1].']';
					$mpdf->Output($namapdf, 'I');
				}
        }
        else {
            redirect(base_url());
        }
	}
}
