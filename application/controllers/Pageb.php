<?php

class Pageb extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['current'] = 'pageb';
		$data['title'] = 'Title B';
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/pageb');
		$this->load->view('templates/footer');
	}
}
?>