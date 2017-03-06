<?php

/**
* 
*/
class Test_con extends CI_Controller
{
	
	public function index()
	{
		
		$this->load->database();
		$variable = $_GET['number'];
    	$sql = $this->db->query("SELECT * FROM departments where id=$variable");
    	$data['dept'] = $sql->result_array();
    	$this->load->view('test', $data);
    	//print_r($sql->result_array());

		//$this->load->model('dept_lst1');
		//$data['list'] = $this->dept_lst1->record();
		//$this->load->view('test',$data);

	}
}
