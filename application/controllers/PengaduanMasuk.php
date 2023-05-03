<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaduanMasuk extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pengaduanmasuk');
		$this->load->view('template/footer');
	}
}
