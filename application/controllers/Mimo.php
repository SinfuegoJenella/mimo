<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimo extends CI_Controller {

	
	public function index()
	{
		$headerdata['title'] = "MimO | Music Hall";
		$this->load->view('include/header',$headerdata);
		$this->load->view('mimo_v/musichall');
		$this->load->view('include/footer');
	}
	
	public function settings()
	{
		$headerdata['title'] = "MimO | Settings";
		$this->load->view('include/header',$headerdata);
		$this->load->view('mimo_v/settings');
		$this->load->view('include/footer');
		
	}
	
}
