<?php

/**
* 
*/
class Dept_lst1 extends CI_Model
{
	
	public function record()
	{
		$this->load->database();
		$res = $this->db->query("SELECT * From departments");
		return $res->result();
	}

	
}