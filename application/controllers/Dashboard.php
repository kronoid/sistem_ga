<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
        $this->load->helper('url');
	}
	
	public function index(){
        if($this->session->userdata('username') != '') {
            $this->load->view('dashboard');
        }
        else {
            redirect(base_url());
        }
    }
}