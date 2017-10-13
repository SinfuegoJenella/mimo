<?php

class upload extends CI_Model {
    

	public function insert($table,$data){
		$this->db->insert($table, $data);
		return TRUE;	
	}
}
