<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_biayarumahtangga extends CI_Model{
	
	function __construct() 
	{
        parent::__construct();
    }
	
	function jenis_tahunbiayarumahtangga(){
		$data = $this->db->query("SELECT DISTINCT(year(Tgl_Beli)) AS tahun FROM pembayaran_rumahtangga ORDER BY tahun ASC");
		return $data->result();
	}
	function jenis_bulanbiayarumahtangga(){
		$data = $this->db->query("SELECT DISTINCT year(Tgl_Beli) AS tahun, month(Tgl_Beli) AS bulan FROM pembayaran_rumahtangga ORDER BY tahun ASC");
		return $data->result();
	}
	function tampil_databiayarumahtangga(){
		$data = $this->db->query("SELECT * ,year(Tgl_Beli) AS tahun, month(Tgl_Beli) AS bulan FROM pembayaran_rumahtangga ORDER BY Nama_Barang ASC");
		return $data->result();
	}
	function input_databiayarumahtangga($data){
		$this->db->insert("pembayaran_rumahtangga",$data);
	}
	function edit_databiayarumahtangga($data,$field,$where){
		$this->db->where($field,$where);
		$this->db->update("pembayaran_rumahtangga",$data);
	}
	function hapus_databiayarumahtangga($field,$where){
		$this->db->where($field,$where);
		$this->db->delete("pembayaran_rumahtangga");
	}
}
?>