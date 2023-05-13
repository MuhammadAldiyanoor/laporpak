<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProsesMasuk extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/prosesmasuk');
		$this->load->view('template/footer');
	}
}
