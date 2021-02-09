<?php

class Paged extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['current'] = 'paged';
		$data['title'] = 'Title D';
	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/paged');
		$this->load->view('templates/footer');
	}
}
?>