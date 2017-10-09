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
	public function hallreadthoughts($userid=null){

		$this->db->select('users.picture,posts.id, posts.type, posts.likes, posts.comments, posts.posted_at,users.username, thoughts.body')
				->from('posts')
				->join('thoughts', 'thoughts.post_id = posts.id')
				->join('followers', 'followers.user_id = posts.user_id', 'left')
				->join('users','users.id = posts.user_id')
				->where('followers.follower_id',$userid)
				->or_where('posts.user_id',$userid)
				->order_by('posts.posted_at', 'DESC');

		$query=$this->db->get();

		return $query->result_array();	
	}
	public function newthoughts($userid=null){

		$this->db->select('users.picture,posts.id, posts.likes, posts.comments, posts.posted_at,users.username, thoughts.body')
				->from('posts')
				->join('thoughts', 'thoughts.post_id = posts.id')
				->join('users', 'users.id = posts.user_id')
				->where('posts.id',' '.$userid.' ');

		$query=$this->db->get();

		return $query->result_array();		
	}

}
