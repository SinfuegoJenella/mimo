<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	
	public function index()
	{
		$headerdata['title'] = "MimO | Music Hall";
		$this->load->view('include/header',$headerdata);
		$this->load->view('mimo_v/login');
		$this->load->view('include/footer');
	}
	
	

}
