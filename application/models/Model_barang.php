<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_barang extends CI_Model{
	
	function __construct() {
        parent::__construct();
    }
	function jenis_tahunbarang(){
		$data = $this->db->query("SELECT DISTINCT(year(Waktu_Report)) AS tahun FROM kondisi_barang ORDER BY tahun ASC");
		return $data->result();
	}
	function jenis_bulanbarang(){
		$data = $this->db->query("SELECT DISTINCT year(Waktu_Report) AS tahun, month(Waktu_Report) AS bulan FROM kondisi_barang ORDER BY tahun ASC");
		return $data->result();
	}
	function tampil_databarang(){
		$data = $this->db->query("SELECT * ,year(Waktu_Report) AS tahun, month(Waktu_Report) AS bulan FROM kondisi_barang ORDER BY Nama_Barang ASC");
		return $data->result();
	}
	function cek_record($data){
		$this->db->select('*');
        $this->db->from('kondisi_barang');
        $this->db->where($data);
        $data = $this->db->get();
        return $data;
	}
	function input_databarang($data){
		$this->db->insert('kondisi_barang',$data);
	}
	function tampil_datagedung(){
		$data = $this->db->get("kondisi_gedung");
		return $data->result();
	}
	function edit_databarang($data,$field,$where){
		$this->db->where($field,$where);
		$this->db->update("kondisi_barang",$data);
	}
	function hapus_databarang($field,$where){
		$this->db->where($field,$where);
		$this->db->delete("kondisi_barang");
	}
}