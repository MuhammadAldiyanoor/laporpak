<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function index()
	{
		$this->load->model('M_pengaduan');
		$data['pengaduan'] = $this->M_pengaduan->show_data();
		// var_dump($data);exit;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/penduduk', $data);
		$this->load->view('template/footer');
	}
}
