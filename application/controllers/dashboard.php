<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('template_penduduk/header');
		$this->load->view('template_penduduk/sidebar');
		$this->load->view('penduduk/dashboardpenduduk');
		$this->load->view('template_penduduk/footer');
	}
}
