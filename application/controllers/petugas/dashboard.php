<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('template_petugas/header');
		$this->load->view('template_petugas/sidebar');
		$this->load->view('petugas/dashboardpetugas');
		$this->load->view('template_petugas/footer');
	}
}
