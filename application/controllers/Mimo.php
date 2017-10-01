<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimo extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('users','users');
		$this->load->model('login_tokens','login_tokens');
		$this->load->model('posts','posts');
		$this->load->model('thoughts','thoughts');
		$this->load->library('login');
		$this->load->library('mail');
		$this->load->library('topics');

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
			    setcookie('SNID', '1', time()-3600);
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
	
	public function artist()
	{
		//check if user is logged in
		if($this->login->isLoggedIn()){
			$headerdata['title'] = "MimO | Artists";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/artist');
			$this->load->view('include/footer');
		}
		// if not redirect to login/signup page
		else{
			redirect ('http://localhost/mimo/accounts');
		}
		
	}//end of settings
	
	public function genre()
	{
		//check if user is logged in
		if($this->login->isLoggedIn()){
			$headerdata['title'] = "MimO | Genre";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/genre');
			$this->load->view('include/footer');
		}
		// if not redirect to login/signup page
		else{
			redirect ('http://localhost/mimo/accounts');
		}
		
	}//end of settings
	
	public function alternativemusic()
	{
		//check if user is logged in
		if($this->login->isLoggedIn()){
			$headerdata['title'] = "MimO | Alternative Music";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/alternativemusic');
			$this->load->view('include/footer');
		}
		// if not redirect to login/signup page
		else{
			redirect ('http://localhost/mimo/accounts');
		}
		
	}//end of settings
	
	public function blues()
	{
		//check if user is logged in
		if($this->login->isLoggedIn()){
			$headerdata['title'] = "MimO | Blues";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/blues');
			$this->load->view('include/footer');
		}
		// if not redirect to login/signup page
		else{
			redirect ('http://localhost/mimo/accounts');
		}
		
	}//end of settings
	
	
	public function myStudio()
	{
		//check if user is logged in
		if($this->login->isLoggedIn()){
			$headerdata['title'] = "MimO | My Studio";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/mystudio');
			$this->load->view('include/footer');
		}
		// if not redirect to login/signup page
		else{
			redirect ('http://localhost/mimo/accounts');
		}
		
	}//end of settings

	public function thoughts(){
		$thoughts = $this->input->post("thoughts");
		$id = $this->login->isLoggedIn();
		if($thoughts!=''){
			$data = array(
					'id'=>null,
					'user_id'=>$id,
					'likes'=>0,
					'comments'=>0,
					'type'=>1
					);
			$this->posts->create($data);
			$topics = $this->topics->getTopics($thoughts);
			$post_id = $this->posts->c();
			$data = array(
					'id'=>null,
					'post_id'=>$post_id,
					'body'=>$thoughts,
					'topics'=>$topics
					);
			$this->thoughts->create($data);
			echo $thoughts;
		}
		else{
			echo 'error';
		}
	}


	
}
