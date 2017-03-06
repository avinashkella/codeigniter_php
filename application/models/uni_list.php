<?php

/**
* 
*/
class Uni_list extends CI_Model
{
	
	public function getList()
	{
		$this->load->database();
		$res = $this->db->query("SELECT * From university");

		return $res->result();
	}

	
}