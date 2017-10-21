<?php

class artists extends CI_Model {
    

	public function newartists(){

		$this->db->select('users.id,users.username,users.picture, about.followers')
				->from('users')
				->join('about', 'about.user_id = users.id')
				->order_by('users.created', 'DESC')
				->limit(10);
		$query=$this->db->get();

		return $query->result_array();		
	}
	public function mimoartists(){

		$this->db->select('users.id,users.username,users.picture, about.followers')
				->from('about')
				->join('users', 'users.id = about.user_id')
				->order_by('about.followers', 'DESC')
				->limit(9);
		$query=$this->db->get();

		return $query->result_array();		
	}
	
	
}
