<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LihatDetailMasuk extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/lihatdetailmasuk');
		$this->load->view('template/footer');
	}
}
