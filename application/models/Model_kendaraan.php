<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_kendaraan extends CI_Model{
	
	function __construct() {
        parent::__construct();
    }
	function jenis_tahunkendaraan(){
		$data = $this->db->query("SELECT DISTINCT(year(Waktu_Report)) AS tahun FROM kondisi_kendaraan ORDER BY tahun ASC");
		return $data->result();
	}
	function jenis_bulankendaraan(){
		$data = $this->db->query("SELECT DISTINCT year(Waktu_Report) AS tahun, month(Waktu_Report) AS bulan FROM kondisi_kendaraan ORDER BY tahun ASC");
		return $data->result();
	}
	function tampil_datakendaraan(){
		$data = $this->db->query("SELECT * ,year(Waktu_Report) AS tahun, month(Waktu_Report) AS bulan FROM kondisi_kendaraan ORDER BY Nama_Kendaraan ASC");
		return $data->result();
	}
	function cek_record($data){
		$this->db->select('*');
        $this->db->from('kondisi_kendaraan');
        $this->db->where($data);
        $data = $this->db->get();
        return $data;
	}
	function input_datakendaraan($data){
		$this->db->insert("kondisi_kendaraan",$data);
	}
	function edit_datakendaraan($data,$field,$where){
		$this->db->where($field,$where);
		$this->db->update("kondisi_kendaraan",$data);
	}
	function hapus_datakendaraan($field,$where){
		$this->db->where($field,$where);
		$this->db->delete("kondisi_kendaraan");
	}
}
?>