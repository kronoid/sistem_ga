<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Main_model extends CI_Model{
	
	function __construct() {
        parent::__construct();
    }
	
	function cek_user($datalogin) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($datalogin);
        $query = $this->db->get();
        return $query;
	}
}
?>