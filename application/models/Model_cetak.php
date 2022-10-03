<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_cetak extends CI_Model{
	
	function __construct() 
	{
        parent::__construct();
    }
	
	function tampil_datacetak($tabel,$filtertabel,$namakolom,$alias){
		$this->db->select('* ,'.$alias);
		$this->db->where($filtertabel);
		$this->db->order_by($namakolom, "asc");
		$data = $this->db->get($tabel);
		return $data->result();
	}
}
?>