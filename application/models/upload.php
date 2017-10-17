<?php

class upload extends CI_Model {
    

	public function insert($table,$data){
		$this->db->insert($table, $data);
		return TRUE;	
	}
	public function c(){
		$lastid = $this->db->insert_id();
		return $lastid;
	}
	public function select($table,$condition=null,$selector=null){

		if($selector==null) $selector = '*';
		$this->db->select($selector);
		$this->db->from($table);
		if( isset($condition) ) $this->db->where($condition);
		$query=$this->db->get();

		return $query->result_array();		
	}
	public function update($table,$data,$condition){
		$this->db->where($condition);
		$this->db->update($table, $data);
		return TRUE;	
	}
}
