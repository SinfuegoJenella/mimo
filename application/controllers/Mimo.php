<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimo extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('users','users');
		$this->load->model('login_tokens','login_tokens');
		$this->load->model('posts','posts');
		$this->load->model('thoughts','thoughts');
		$this->load->model('followers','followers');
		$this->load->model('post_likes','post_likes');
		$this->load->model('getposts');

		$this->load->model('comments');
		$this->load->model('upload');
		$this->load->model('password_tokens');

		$this->load->model('genre','genre');
		$this->load->model('about','about');
		
		$this->load->library('login');
		$this->load->library('mail');
		$this->load->library('topics');
		$this->load->library('facebook');
		$this->load->library('image');

	}//end of __contruct

	public function index()
	{
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			$headerdata['title'] = "MimO | Music Hall";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('mimo_v/musichall');
			$this->load->view('include/footer');
		// echo $this->login->isLoggedIn();

	}//end of index
	
	public function settings()
	{
		//check if user is logged in
		
			if(isset($_POST['account'])){
			$id = $this->login->isLoggedIn();
			$selector= 'username';
			$condition = array('id'=>$id);
			$previoususername= $this->users->read($condition,$selector)[0]['username'];
			$selector= 'lastname';
			$previouslastname= $this->users->read($condition,$selector)[0]['lastname'];
			$selector= 'firstname';
			$previousfirstname= $this->users->read($condition,$selector)[0]['firstname'];
			$selector= 'picture';
			$previousprofile= $this->users->read($condition,$selector)[0]['picture'];
			$selector= 'header';
			$previousheader= $this->users->read($condition,$selector)[0]['header'];
			
			$username = $this->input->post("username", TRUE);
			$lastname = $this->input->post("lastname", TRUE);
			$firstname= $this->input->post("firstname", TRUE);
			
			$profileimage= $_FILES['imgProfile'];
			$headerimage= $_FILES['imgHeader'];
			if($profileimage['name']=='') {
					//echo "<h2>An Image Please.</h2>";
					$profilelink=$previousprofile;
			}
			else{
			//print_r ($image);
			$profilelink=$this->image->uploadImage($profileimage); 
				if($profilelink==NULL)
				{
					$profilelink=$previousprofile;
					echo "<script type='text/javascript'>alert('Connection Error');</script>";
				}
			}
			
			if($headerimage['name']=='') {  
					//echo "<h2>An Image Please.</h2>";
					$headerlink=$previousheader;
			}
			else{
			//print_r ($image);
			$headerlink=$this->image->uploadImage($headerimage); 
			}
			
			if ($username==NULL){
				$username=$previoususername;
			}
			if ($lastname==NULL){
				$lastname=$previouslastname;
			}
			if ($firstname==NULL){
				$firstname=$previousfirstname;
			}
			
			$data = array(
					'username'=>$username,
					'lastname'=>$lastname,
					'firstname'=>$firstname,
					'picture'=>$profilelink,
					'header'=>$headerlink
					);
			$this->users->update($data,$condition);
			
			}
			if(isset($_POST['mymusic'])){
			$id = $this->login->isLoggedIn();
			$selector= 'career';
			$condition = array('user_id'=>$id);
			$previouscareer= $this->about->read($condition,$selector)[0]['career'];
			$genre1 = $this->input->post("genre1", TRUE);
			$genre2 = $this->input->post("genre2", TRUE);
			$genre3 = $this->input->post("genre3", TRUE);
			$mcareer =$this->input->post("mcareer", TRUE);
			$career="";
			if($mcareer==""){
				$career=$previouscareer;
			}
			else{
				foreach($mcareer as $car)
				{
					$career .= $car. " , ";
						
				}
			}
			if($genre1=="None")
				{ $genre1=NULL;
				}
			if($genre2=="None")
				{ $genre2=NULL;
				}
			if($genre3=="None")
				{ $genre3=NULL;
				}
			
			$data = array(
					'genre1'=>$genre1,
					'genre2'=>$genre2,
					'genre3'=>$genre3,
					'career'=>$career
					);
			
			$this->about->update($data,$condition);
			}
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			$condition = array('user_id'=>$id);
			$data['about'] = $this->about->read($condition);
			$data['genre'] = $this->genre->read();
			$headerdata['title'] = "MimO | Settings";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('mimo_v/settings', $data);
			$this->load->view('include/footer');

	}//end of settings
	
	public function artist()
	{
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			$headerdata['title'] = "MimO | Artist";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('mimo_v/artist');
			$this->load->view('include/footer');

	}//end of artist

	public function genre()
	{
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			$headerdata['title'] = "MimO | Genres";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('mimo_v/genre');
			$this->load->view('include/footer');
	}//end of genre
	

	public function browse()
	{
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			$headerdata['title'] = "MimO | Browse";

			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('mimo_v/browse');
			$this->load->view('include/footer');
	}//end of browse
	
	public function myStudio()
	{
			if(isset($_GET['username'])){
				$username = $_GET['username'];
				//check if user exists
				$condition = array('username'=>$username);
				if($this->users->read($condition)){
					$user = $this->users->read($condition);
					$data['user'] = $user;
					$user_id=$user[0]['id'];
					$condition = array('user_id'=>$user_id);
					$data['about'] = $this->about->read($condition);
					// echo $username;
				}
				else{
					redirect('mimo');
				}

			}
			else{
				redirect('mimo');
			}
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			
			$headerdata['title'] = "MimO | My Studio";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('include/topnav');
			$this->load->view('mimo_v/mystudio');
			$this->load->view('include/footer');
	
	}//end of myStudio
	public function posts(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$browseUserid = $this->input->post("browseuser");
			$posts = $this->getposts->readthoughts($browseUserid);
			$result = array();
                foreach($posts as $post) {

                      $p=array('PostId'=>$post['id'],
                      			'PostUserPicture'=>$post['picture'],
                      			'PostBody'=>$post['body'],
                      			'PostUser'=>$post['username'],
                      			'PostLikes'=>$post['likes'],
                      			'PostComments'=>$post['comments'],
                      			'PostDate'=>$post['posted_at']
                      	);
                      array_push($result,$p);
                }
              echo json_encode($result);
		}
		else{
			redirect('mimo');
		}
	}//end of posts function
	public function likes(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$postid = $this->input->post("postid");
			$likerid = $this->login->isLoggedIn();
			$selector = 'likes';
			$condition = array('id'=>$postid);
			$numlikes = $this->posts->read($condition,$selector)[0]['likes'];
			$condition = array('post_id'=>$postid,'user_id'=>$likerid);
			if(!$this->post_likes->read($condition)){
				$data = array('likes'=>$numlikes+1);
				$condition = array('id'=>$postid);
				$this->posts->update($data,$condition);
				$data = array('id'=>null,'post_id'=>$postid,'user_id'=>$likerid);
				$this->post_likes->create($data);
			}
			else{
				$data = array('likes'=>$numlikes-1);
				$condition = array('id'=>$postid);
				$this->posts->update($data,$condition);
				$data = array('post_id'=>$postid,'user_id'=>$likerid);
				$this->post_likes->del($data);
			}
			$selector = 'likes';
			$condition = array('id'=>$postid);
			$likes = $this->posts->read($condition,$selector)[0]['likes'];
			echo json_encode(array('likes'=>$likes));
		}
		else{
			redirect('mimo');
		}
	}//end of likes function
	public function search(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$search = $this->input->post("searchword");
			if($search!=''){
				$query = $this->getposts->getsearch($search);
				echo json_encode($query);
			}
		}
		else{
			redirect('mimo');
		}
	}//end of search()
	public function hallposts(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$userid = $this->login->isLoggedIn();
			$posts = $this->getposts->hallreadthoughts($userid);
			$result = array();
                foreach($posts as $post) {

                      $p=array('PostType'=>$post['type'],
                      			'PostId'=>$post['id'],
                      			'PostUserPicture'=>$post['picture'],
                      			'PostBody'=>$post['body'],
                      			'PostUser'=>$post['username'],
                      			'PostLikes'=>$post['likes'],
                      			'PostComments'=>$post['comments'],
                      			'PostDate'=>$post['posted_at']
                      	);
                      array_push($result,$p);
                }
              echo json_encode($result);
		}
		else{
			redirect('mimo');
		}
	}//end of hallposts

	public function thoughts(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
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
				$query = $this->getposts->newthoughts($post_id);
				echo json_encode($query);
			}
			else{
				echo 'error';
			}
		}
		else{
			redirect('mimo');
		}
	}//end of thoughts

	public function audios(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$title = $_POST['title'];
			$desc = $_POST['audDescInput'];
			$genre = $_POST['genre'];
			$type = explode('.', $_FILES["file"]["name"]);
			$type = strtolower($type[count($type)-1]);
			$noover = uniqid(rand()).'.'.$type;
			$image= $_FILES['uploadAudioImg'];
			$audioart=$this->image->uploadImage($image); 
			print_r($audioart);
			$url = "C:\wamp64\www\mimo\assets\uploads\audios/".$noover;
		    move_uploaded_file($_FILES['file']['tmp_name'], $url);
		    $path = "http://localhost/mimo/assets/uploads/audios/".$noover;
			
		    $id = $this->login->isLoggedIn();
				$data = array(
						'id'=>null,
						'user_id'=>$id,
						'likes'=>0,
						'comments'=>0,
						'type'=>2
						);
				$this->posts->create($data);
				$topics = $this->topics->getTopics($desc);
				$post_id = $this->posts->c();
				$data = array(
							'id'=>null,
							'post_id'=>$post_id,
							'title'=>$title,
							'genre'=>$genre,
							'about'=>$desc,
							'path'=>$path,
							'cover'=>$audioart,
							'topics'=>$topics

					);
				$this->upload->insert('audios',$data);
		    
		}
	}//end of audio()
	public function videos(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$title = $_POST['title'];
			$desc = $_POST['vidDescInput'];
			$types = explode('.', $_FILES["vidUpload"]["name"]);
			$types = strtolower($types[count($types)-1]);
			$noover = uniqid(rand()).'.'.$types;
			$url = "C:\wamp\www\mimo\assets\uploads/videos/".$noover;
		    move_uploaded_file($_FILES['vidUpload']['tmp_name'], $url);
		    $path = "http://localhost/mimo/assets/uploads/videos/".$noover;

		    $id = $this->login->isLoggedIn();
				$data = array(
						'id'=>null,
						'user_id'=>$id,
						'likes'=>0,
						'comments'=>0,
						'type'=>3
						);
				$this->posts->create($data);
				$topics = $this->topics->getTopics($desc);
				$post_id = $this->posts->c();
				$data = array(
							'id'=>null,
							'post_id'=>$post_id,
							'title'=>$title,
							'about'=>$desc,
							'path'=>$path,
							'topics'=>$topics

					);
				$this->upload->insert('videos',$data);
		    
		}
	}//end of videos()

	public function comment(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$comment = $this->input->post("comment");
			$postid = $this->input->post("postid");
			$id = $this->login->isLoggedIn();
			if($comment!=''){
				$data = array(
						'id'=>null,
						'post_id'=>$postid,
						'user_id'=>$id,
						'comment'=>$comment
						);
				$this->comments->create($data);
				$id = $this->comments->c();
				$datas = $this->comments->aftercom($id);
				echo json_encode($datas);
			}
			else{
				
			}
			
		}
		else{
			redirect('mimo');
		}
	}//end of comment()
	public function getcomments(){
		$postid = $this->input->post("postid");
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$query = $this->comments->getcom($postid);
			echo json_encode($query);
		}
		else{
			redirect('mimo');
		}
	}//end of getcomments()
	public function checkfollow(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$userid = $this->input->post("userid");
			$followerid = $this->input->post("followerid");
			if($this->followers->read($userid,$followerid)){
				$isFollowing = true;
				echo json_encode(array('status'=>$isFollowing));
			}
			else{
				$isFollowing = false;
				echo json_encode(array('status'=>$isFollowing));
			}
		}
		else{
			redirect('mimo');
		}
	}//end of checkfollow()
	public function follow(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$userid = $this->input->post("userid");
			$followerid = $this->input->post("followerid");
			if(!$this->followers->read($userid,$followerid)){
				$data = array('id'=>null, 'user_id'=>$userid,'follower_id'=>$followerid);
				$this->followers->create($data);
				echo 'false-true';
			}
			else{
				$data = array('user_id'=>$userid,'follower_id'=>$followerid);
				$this->followers->del($data);
				echo 'tru-false';
			}
		}
		else{
			redirect('mimo');
		}
	}//end of follow
	public function changepass(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$email = $this->input->post("email");
			$cstrong = True;
       		$token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
			$selector = 'id';
			$condition = array('email'=>$email);
			$userid = $this->users->read($condition,$selector)[0]['id'];
			$data = array('id'=>null,'token'=>sha1($token),'user_id'=>$userid);
			$this->password_tokens->create($data);
			$this->mail->sendMail('Forgot Password!', "<a href='http://localhost/mimo/accounts/change_password?token=$token'>Click here to change your password!</a>", $email);
		}
	}
	public function charts()
	{
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			$headerdata['title'] = "MimO | Charts";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('include/topnav');
			$this->load->view('mimo_v/charts');
			$this->load->view('include/footer');
		
	}//end of charts
	
	
	public function playlist()
	{
			$id = $this->login->isLoggedIn();
			$condition = array('id'=>$id);
			$data['users'] = $this->users->read($condition);
			$headerdata['title'] = "MimO | Charts";
			$this->load->view('include/header',$headerdata);
			$this->load->view('include/topnav', $data);
			$this->load->view('charts/playlist');
			$this->load->view('include/footer');
		
	}//end of playlist

	public function logout() {
		
		if (isset($_COOKIE['SNID'])) {
			    	$data = array('token'=>sha1($_COOKIE['SNID']));
			        $this->login_tokens->del($data);
			    }
			    setcookie("SNID", '', time() - 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
			    setcookie("SNID_", '1', time() - 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
        redirect('/accounts/signin');
    }//end of logout
	
	
	
	public function audioplayer()
	{
		$headerdata['title'] = "MimO | Audio Player";
		$this->load->view('include/header',$headerdata);
		$this->load->view('mimo_v/audio_player');
		$this->load->view('include/footer');
		
	}
	
	public function errorpage()
	{
		$headerdata['title'] = "MimO | Error Page";
		$this->load->view('include/header',$headerdata);
		$this->load->view('mimo_v/error_page');
		$this->load->view('include/footer');
		
	}
}

