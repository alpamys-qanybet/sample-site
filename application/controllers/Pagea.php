<?php

class Pagea extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['current'] = 'pagea';
		$data['title'] = 'Title A';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/pagea');
		$this->load->view('templates/footer');
	}
}
?>