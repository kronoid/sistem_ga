<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_user extends CI_Model{
	
	function __construct() {
        parent::__construct();
    }
	function cek_record($datalogin) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($datalogin);
        $query = $this->db->get();
        return $query;
	}
	function tampil_datauser(){
		$this->db->order_by("Id_User", "asc");
		$data = $this->db->get("user");
		return $data->result();
	}
	function input_datauser($data){
		$this->db->insert("user",$data);
	}
	function edit_datauser($data,$field,$where){
		$this->db->where($field,$where);
		$this->db->update("user",$data);
	}
	function hapus_datauser($field,$where){
		$this->db->where($field,$where);
		$this->db->delete("user");
	}
}
?>