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
		$this->load->library('facebook');

	}//end of __contruct

	public function index()
	{
			$headerdata['title'] = "MimO | Music Hall";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav');
			$this->load->view('mimo_v/musichall');
			$this->load->view('include/footer');
		// echo $this->login->isLoggedIn();

	}//end of index
	
	public function settings()
	{
		//check if user is logged in
		
			$headerdata['title'] = "MimO | Settings";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav');
			$this->load->view('mimo_v/settings');
			$this->load->view('include/footer');

	}//end of settings
	
	public function artist()
	{
			$headerdata['title'] = "MimO | Artists";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/artist');
			$this->load->view('include/footer');
	}//end of settings
	public function genre()
	{
			$headerdata['title'] = "MimO | Genre";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/genre');
			$this->load->view('include/footer');
	}//end of settings
	
	public function browse()
	{

			$headerdata['title'] = "MimO | Browse";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/browse');
			$this->load->view('include/footer');
	}//end of settings
	
	public function myStudio()
	{

			$headerdata['title'] = "MimO | My Studio";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav');
			$this->load->view('mimo_v/mystudio');
			$this->load->view('include/footer');
	
	}//end of settings

	// public function thoughts(){
		// $thoughts = $this->input->post("thoughts");
		// $id = $this->login->isLoggedIn();
		// if($thoughts!=''){
			// $data = array(
					// 'id'=>null,
					// 'user_id'=>$id,
					// 'likes'=>0,
					// 'comments'=>0,
					// 'type'=>1
					// );
			// $this->posts->create($data);
			// $topics = $this->topics->getTopics($thoughts);
			// $post_id = $this->posts->c();
			// $data = array(
					// 'id'=>null,
					// 'post_id'=>$post_id,
					// 'body'=>$thoughts,
					// 'topics'=>$topics
					// );
			// $this->thoughts->create($data);
			// echo $thoughts;
		// }
		// else{
			// echo 'error';
		// }
	// }
	
	public function charts()
	{
		$headerdata['title'] = "MimO | Charts";
		$this->load->view('include/header',$headerdata);
		$this->load->view('include/topnav');
		$this->load->view('mimo_v/charts');
		$this->load->view('include/footer');
		
	}
	
	public function playlist()
	{
		$headerdata['title'] = "MimO | Charts";
		$this->load->view('include/header',$headerdata);
		$this->load->view('charts/playlist');
		$this->load->view('include/footer');
		
	}

	public function logout() {
		
		if (isset($_COOKIE['SNID'])) {
			    	$data = array('token'=>sha1($_COOKIE['SNID']));
			        $this->login_tokens->del($data);
			    }
			    setcookie('SNID', '1', time()-3600);
                setcookie('SNID_', '1', time()-3600);
        redirect('/accounts/signin');
    }
	
}
