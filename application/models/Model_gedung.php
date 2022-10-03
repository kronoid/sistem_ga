<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_gedung extends CI_Model{
	
	function __construct() {
        parent::__construct();
    }
	function jenis_tahungedung(){
		$data = $this->db->query("SELECT DISTINCT(year(Waktu_Report)) AS tahun FROM kondisi_gedung ORDER BY tahun ASC");
		return $data->result();
	}
	function jenis_bulangedung(){
		$data = $this->db->query("SELECT DISTINCT year(Waktu_Report) AS tahun, month(Waktu_Report) AS bulan FROM kondisi_gedung ORDER BY tahun ASC");
		return $data->result();
	}
	function tampil_datagedung(){
		$data = $this->db->query("SELECT * ,year(Waktu_Report) AS tahun, month(Waktu_Report) AS bulan FROM kondisi_gedung ORDER BY Nama_Ruangan ASC");
		return $data->result();
	}
	function cek_record($data){
		$this->db->select('*');
        $this->db->from('kondisi_gedung');
        $this->db->where($data);
        $data = $this->db->get();
        return $data;
	}
	function input_datagedung($data){
		$this->db->insert("kondisi_gedung",$data);
	}
	function edit_datagedung($data,$field,$where){
		$this->db->where($field,$where);
		$this->db->update("kondisi_gedung",$data);
	}
	function hapus_datagedung($field,$where){
		$this->db->where($field,$where);
		$this->db->delete("kondisi_gedung");
	}
}
?>