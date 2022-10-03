<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_biayakantor extends CI_Model{
	
	function __construct() 
	{
        parent::__construct();
    }
	function jenis_tahunbiayakantor(){
		$data = $this->db->query("SELECT DISTINCT(year(Tgl_Pembayaran)) AS tahun FROM pembayaran_kantor ORDER BY tahun ASC");
		return $data->result();
	}
	function jenis_bulanbiayakantor(){
		$data = $this->db->query("SELECT DISTINCT year(Tgl_Pembayaran) AS tahun, month(Tgl_Pembayaran) AS bulan FROM pembayaran_kantor ORDER BY tahun ASC");
		return $data->result();
	}
	function tampil_databiayakantor(){
		$data = $this->db->query("SELECT * ,year(Tgl_Pembayaran) AS tahun, month(Tgl_Pembayaran) AS bulan FROM pembayaran_kantor ORDER BY Nama_Pembayaran ASC");
		return $data->result();
	}
	function input_databiayakantor($data){
		$this->db->insert("pembayaran_kantor",$data);
	}
	function edit_databiayakantor($data,$field,$where){
		$this->db->where($field,$where);
		$this->db->update("pembayaran_kantor",$data);
	}
	function hapus_databiayakantor($field,$where){
		$this->db->where($field,$where);
		$this->db->delete("pembayaran_kantor");
	}
}
?>