<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahPenduduk extends CI_Controller {

	public function index()
	{
		// $this->load->view('template/header');
		// $this->load->view('template/sidebar')	;
		$this->load->view('admin/tambahpenduduk');
		// $this->load->view('template/footer');
	}
	public function _rules()
	{
		$this->form_validation->set_rules('id_masyarakat','nama','alamat','agama','telp','nik','jenis_kelamin','required');
	
	}

	public function tambah_data_aksi()
	{
		$this->load->model('M_penduduk');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
		}else{
			$id_masyarakat	  	 		 = $this->input->post('id_masyarakat');
			$nama		 				 = $this->input->post('nama');
			$alamat	 		  	  		 = $this->input->post('alamat');
			$agama 	 		  	  		 = $this->input->post('agama');
			$telp 	 					 = $this->input->post('telp');
			$nik	 		  			 = $this->input->post('nik');
			$jenis_kelamin	 		 	 = $this->input->post('jenis_kelamin');
		


			$data = array(
				'id_masyarakat'				=> $id_masyarakat,
				'nama'						=> $nama,
				'alamat'					=> $alamat,
				'agama'						=> $agama,
				'telp'						=> $telp,
				'nik'						=> $nik,
				'jenis_kelamin'				=> $jenis_kelamin,
			);

			$this->M_pennduduk->insert_data($data, 'penduduk');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('penduduk/dashboard');
		}
	}
}
