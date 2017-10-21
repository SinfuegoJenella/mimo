<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {
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
		$this->load->model('notif');
		$this->load->model('upload');
		
		$this->load->library('login');
		$this->load->library('topics');
		$this->load->library('image');
		$this->load->library('Notify');

	}//end of __contsruct()

	public function index()
	{
		if(isset($_GET['pid'])){
			$data['postid'] = $_GET['pid'];
			// $post = $this->notif->notifpost($postid);
			if($data['postid']!=''){
				$id = $this->login->isLoggedIn();
				$condition = array('id'=>$id);
				$data['users'] = $this->users->read($condition);

				$headerdata['title'] = "MimO | Search";
				$this->load->view('include/header',$headerdata);
				$this->load->view('include/topnav', $data);
				$this->load->view('mimo_v/notifres');
				$this->load->view('include/footer');
			}
			else{
				redirect('mimo');
			}
		}
		else{
			redirect('error');
		}
	}
	public function post(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$postid = $this->input->post("postid");
			$posts = $this->notif->notifpost($postid);
			$result = array();
                foreach($posts as $post) {
                	$phpdate = strtotime( $post['posted_at'] );
                      $p=array('PostType'=>$post['type'],
                      			'PostId'=>$post['id'],
                      			'PostUserPicture'=>$post['picture'],
                      			'PostUser'=>$post['username'],
                      			'PostLikes'=>$post['likes'],
                      			'PostComments'=>$post['comments'],
                      			'PostDate'=>date( 'M d Y h:i a', $phpdate ),
                      			'thoughtBody'=>$this->topics->link_add($post['body']),
                      			'audioAbout'=>$this->topics->link_add($post['about']),
                      			'videoAbout'=>$this->topics->link_add($post['description']),
                      			'audioPath'=>$post['path'],
                      			'videoPath'=>$post['url'],
                      			'audioTitle'=>$post['title'],
                      			'videoTitle'=>$post['name'],
                      			'audioGenre'=>$post['genre'],
                      			'audioCover'=>$post['cover'],
                      	);
                      array_push($result,$p);
                }
              echo json_encode($result);
		}
		else{
			redirect('error');
		}
	}
	public function getnotif(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$userid = $this->input->post("userid");
			$notif = $this->notif->getnotif($userid);
			$result = array();
                foreach($notif as $post) {
                	$phpdate = strtotime( $post['date'] );
                      $p=array('sender'=>$post['sender'],
                      			'type'=>$post['type'],
                      			'post_id'=>$post['post_id'],
                      			'notifurl'=>$post['notifurl'],
                      			'date'=>date( 'M d Y h:i a', $phpdate ),
                      			'username'=>$post['username'],
                      			'picture'=>$post['picture'],
                      	);
                      array_push($result,$p);
                }
              echo json_encode($result);
		}
		else{
			redirect('error');
		}
	}
}
