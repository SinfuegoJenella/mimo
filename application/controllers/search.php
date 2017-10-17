<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('users','users');
		$this->load->model('login_tokens','login_tokens');
		$this->load->model('posts','posts');
		$this->load->model('thoughts','thoughts');
		$this->load->model('followers','followers');
		$this->load->model('post_likes','post_likes');
		$this->load->model('getposts');
		$this->load->model('getSearch');

		$this->load->model('comments');
		$this->load->model('upload');
		
		$this->load->library('login');
		$this->load->library('topics');
		$this->load->library('image');

	}//end of __contsruct()
	
	public function index(){

			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$search = $this->input->post("searchword");
				if($search!=''){
					$query = $this->getSearch->getlistsearch($search);
					echo json_encode($query);
				}
			}
			else if(isset($_GET['q'])){
				$data['q']=$_GET['q'];
				if($data['q']!=''){
					$id = $this->login->isLoggedIn();
					$condition = array('id'=>$id);
					$data['users'] = $this->users->read($condition);

					$headerdata['title'] = "MimO | Search";
					$this->load->view('include/header',$headerdata);
					$this->load->view('include/topnav', $data);
					$this->load->view('mimo_v/searchpage',$data);
					$this->load->view('include/footer');
				}
				else{
					redirect('mimo');
				}
			}

			else{
				redirect('error');
			}
	}//end of index()

	public function artist(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$toSearch = $this->input->post("toSearch");
			$id = $this->login->isLoggedIn();
			if($this->getSearch->getartistsearch($toSearch,$id)){
				$result = $this->getSearch->getartistsearch($toSearch,$id);
				echo json_encode($result);
			}
			else{
				echo json_encode(array('id'=>"error"));
			}
		}
		else{
			redirect('error');
		}
	}//end of artist()

	public function thoughts(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$toSearch = $this->input->post("toSearch");
			if($this->getSearch->getthoughtsearch($toSearch)){
				$result = $this->getSearch->getthoughtsearch($toSearch);
				$res = array();
	                foreach($result as $results) {
	                	$p=array(
	                			'id'=>$results['id'],
	                			'username'=>$results['username'],
	                			'picture'=>$results['picture'],
	                			'body'=>$this->topics->link_add($results['body']),
	                			'posted_at'=>$results['posted_at'],
	                			'likes'=>$results['likes'],
	                			'comments'=>$results['comments']
	                		);
	                	array_push($res,$p);

	                }
				echo json_encode($res);
			}
			else{
				echo json_encode(array('id'=>"error"));
			}

		}
		else{
			redirect('error');
		}
	}//end of thoughts()

	public function audios(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$toSearch = $this->input->post("toSearch");
			if($this->getSearch->getaudiosearch($toSearch)){
				$result = $this->getSearch->getaudiosearch($toSearch);
				$res = array();
	                foreach($result as $results) {
	                	$p=array(
	                			'id'=>$results['id'],
	                			'username'=>$results['username'],
	                			'about'=>$this->topics->link_add($results['about']),
	                			'posted_at'=>$results['posted_at'],
	                			'likes'=>$results['likes'],
	                			'comments'=>$results['comments'],
	                			'cover'=>$results['cover'],
	                			'title'=>$results['title'],
	                			'path'=>$results['path'],
	                			'genre'=>$results['genre']
	                		);
	                	array_push($res,$p);

	                }
	                echo json_encode($res);
	        }
			else{
				echo json_encode(array('id'=>"error"));
			}
		}
		else{
			redirect('error');
		}
	}//end of audios()

	public function videos(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$toSearch = $this->input->post("toSearch");
			if($this->getSearch->getvideosearch($toSearch)){
				$result = $this->getSearch->getvideosearch($toSearch);
				$res = array();
	                foreach($result as $results) {
	                	$p=array(
	                			'id'=>$results['id'],
	                			'username'=>$results['username'],
	                			'picture'=>$results['picture'],
	                			'description'=>$this->topics->link_add($results['description']),
	                			'posted_at'=>$results['posted_at'],
	                			'likes'=>$results['likes'],
	                			'comments'=>$results['comments'],
	                			'name'=>$results['name'],
	                			'url'=>$results['url']
	                		);
	                	array_push($res,$p);

	                }
				echo json_encode($res);
			}
			else{
				echo json_encode(array('id'=>"error"));
			}
		}
		else{
			redirect('error');
		}
	}//end of videos()
}
