<?php

class Pagec extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['current'] = 'pagec';
		$data['title'] = 'Title C';
	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/pagec');
		$this->load->view('templates/footer');
	}
}
?>