<?php

class users extends CI_Model {
    
	private $table = "post";
	
	public function create($data){
		$this->db->insert($this->table, $data);
		return TRUE;	
	}
	
	public function read($condition=null,$selector=null){
		
		// SELECT * FROM students
		if($selector==null) $selector = '*';
		$this->db->select($selector);
		$this->db->from($this->table);
		
		// $this->db->select()
				// ->from()
				// ->join()
				// ->where();
		
		// $this->db->join('table2','table1.key=table2.fk','inner');
		// $this->db->order_by('field_name');
		
		if( isset($condition) ) $this->db->where($condition);
		

		$query=$this->db->get();

		return $query->result_array();		
	}
	
	public function update($data,$condition){
		$this->db->where($condition);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function del($data){
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;	
	}
}
