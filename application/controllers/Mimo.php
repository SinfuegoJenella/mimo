<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimo extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('users','users');
		$this->load->model('login_tokens','login_tokens');
		$this->load->library('login');
		$this->load->library('mail');
	}//end of __contruct

	public function index()
	{
		//check is user is logged in
		if($this->login->isLoggedIn()){
		//if yes, load the homepage
			//if logout is click
			if(isset($_GET['a'])=='logout'){
				
				if (isset($_COOKIE['SNID'])) {
					$data = array('token'=>sha1($_COOKIE['SNID']));
					$this->login_tokens->del($data);
			    }
			    setcookie('SNID', '', time()-3600);
			    setcookie('SNID_', '1', time()-3600);
			    redirect ('http://localhost/mimo/accounts/');
			}
			$headerdata['title'] = "MimO | Music Hall";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/musichall');
			$this->load->view('include/footer');
			
		}
		//if not redirect to login/signup page
		else{
			redirect ('http://localhost/mimo/accounts');
		}

	}//end of index
	
	public function settings()
	{
		//check if user is logged in
		if($this->login->isLoggedIn()){
			$headerdata['title'] = "MimO | Settings";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/settings');
			$this->load->view('include/footer');
		}
		// if not redirect to login/signup page
		else{
			redirect ('http://localhost/mimo/accounts');
		}
		
	}//end of settings


	
}
