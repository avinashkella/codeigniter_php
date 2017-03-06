<?php

/**
* 
*/
class University extends CI_Controller {
	public function index() {
		$this->load->model('uni_list');
		$data['list'] = $this->uni_list->getList();
		$this->load->model('dept_lst1');
		$data['departments'] = $this->dept_lst1->record();
		$this->load->view('department',$data);
	}
}
