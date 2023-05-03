<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaduanDitolak extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pengaduanditolak');
		$this->load->view('template/footer');
	}
}
