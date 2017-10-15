<?php

class getposts extends CI_Model {
    

	public function readthoughts($userid=null){

		$this->db->select('users.picture,posts.id, posts.likes, posts.comments, posts.posted_at,users.username, thoughts.body')
				->from('posts')
				->join('thoughts', 'thoughts.post_id = posts.id')
				->join('users', 'users.id = posts.user_id')
				->where('posts.user_id',' '.$userid.' ')
				->where('posts.type',1)
				->order_by('posts.posted_at', 'DESC');

		$query=$this->db->get();

		return $query->result_array();		
	}
	public function readaudios($userid=null){

		$this->db->select('users.picture,posts.id, posts.likes, posts.comments, posts.posted_at,users.username, audios.title,audios.genre,audios.cover,audios.path,audios.about')
				->from('posts')
				->join('audios', 'audios.post_id = posts.id')
				->join('users', 'users.id = posts.user_id')
				->where('posts.user_id',' '.$userid.' ')
				->where('posts.type',2)
				->order_by('posts.posted_at', 'DESC');

				//SELECT `users`.`picture`, `posts`.`id`, `posts`.`likes`, `posts`.`comments`, `posts`.`posted_at`, `users`.`username`, audios.title,audios.genre,audios.cover
				// FROM `posts`
				// JOIN audios ON `audios`.`post_id` = `posts`.`id`
				// JOIN `users` ON `users`.`id` = `posts`.`user_id`
				// WHERE users.id = 1
				// AND posts.type = 2
				// ORDER BY `posts`.`posted_at` DESC

		$query=$this->db->get();

		return $query->result_array();		
	}
	public function readvideos($userid=null){

		$this->db->select('users.picture,posts.id, posts.likes, posts.comments, posts.posted_at,users.username, videos.url,videos.description,videos.name')
				->from('posts')
				->join('videos', 'videos.post_id = posts.id')
				->join('users', 'users.id = posts.user_id')
				->where('posts.user_id',' '.$userid.' ')
				->where('posts.type',3)
				->order_by('posts.posted_at', 'DESC');

		$query=$this->db->get();

		return $query->result_array();		
	}
	public function getsearch($like){
		$this->db->select('username,firstname,lastname')
				->from('users')
				->like('username',$like)
				->or_like('firstname',$like)
				->or_like('lastname',$like)
				->limit(10);

		$query=$this->db->get();

		return $query->result_array();	
	}
	public function allposts($userid=null){

		$this->db->select('users.picture,posts.id, posts.type, posts.likes, posts.comments, posts.posted_at,users.username, thoughts.body, audios.title,audios.genre,audios.cover,audios.path,audios.about,videos.url,videos.description,videos.name')
				->from('posts')
				->join('thoughts', 'thoughts.post_id = posts.id','left')
				->join('videos', 'videos.post_id = posts.id','left')
				->join('audios', 'audios.post_id = posts.id','left')
				->join('followers', 'followers.user_id = posts.user_id', 'left')
				->join('users','users.id = posts.user_id')
				->where('followers.follower_id',$userid)
				->or_where('posts.user_id',$userid)
				->order_by('posts.posted_at', 'DESC');

		$query=$this->db->get();

		return $query->result_array();	
	}
	public function newthoughts($postid=null){

		$this->db->select('users.picture,posts.id, posts.likes, posts.comments, posts.posted_at,users.username, thoughts.body')
				->from('posts')
				->join('thoughts', 'thoughts.post_id = posts.id')
				->join('users', 'users.id = posts.user_id')
				->where('posts.id',' '.$postid.' ');

		$query=$this->db->get();

		return $query->result_array();		
	}

	public function newaudios($postid=null){

		$this->db->select('users.picture,posts.id, posts.likes, posts.comments, posts.posted_at,users.username, audios.title,audios.genre,audios.cover,audios.path,audios.about')
				->from('posts')
				->join('audios', 'audios.post_id = posts.id')
				->join('users', 'users.id = posts.user_id')
				->where('posts.id',' '.$postid.' ');

		$query=$this->db->get();

		return $query->result_array();		
	}
	public function newvideos($userid=null){

		$this->db->select('users.picture,posts.id, posts.likes, posts.comments, posts.posted_at,users.username, videos.url,videos.description,videos.name')
				->from('posts')
				->join('videos', 'videos.post_id = posts.id')
				->join('users', 'users.id = posts.user_id')
				->where('posts.user_id',' '.$userid.' ');

		$query=$this->db->get();

		return $query->result_array();		
	}

}
