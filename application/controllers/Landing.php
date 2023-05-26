<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('landing');
	}
	public function _rules()
	{
		$this->form_validation->set_rules('id_pengaduan','id_kategori','nik','alamat_pelapor','tanggal','isi_laporan','foto','required');
		$this->form_validation->set_rules('id_pengaduan','id_kategori','nik','alamat_pelapor','tanggal','isi_laporan','foto','required');
		$this->form_validation->set_rules('id_pengaduan','id_kategori','nik','alamat_pelapor','tanggal','isi_laporan','foto','required');
		// $this->form_validation->set_rules('id_komoditas','id_komoditas','required');
	}
	public function tambah_data_aksi()
	{
		$this->load->model('M_pengaduan');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
		}else{
			$id_pengaduan	  	  = $this->input->post('id_pengaduan');
			$id_kategori		  = $this->input->post('id_kategori');
			$nik 	 		  	  = $this->input->post('nik');
			$nama 	 		  	  = $this->input->post('nama');
			$alamat_pelapor 	  = $this->input->post('alamat_pelapor');
			$tanggal 	 		  = $this->input->post('tanggal');
			$isi_laporan	 	  = $this->input->post('isi_laporan');
			$foto	 		  	  = $this->input->post('foto');


			$data = array(
				'id_pengaduan'			=> $id_pengaduan,
				'id_kategori'			=> $id_kategori,
				'nik'					=> $nik,
				'nama'					=> $nama,
				'alamat_pelapor'		=> $alamat_pelapor,
				'tanggal'				=> $tanggal,
				'isi_laporan'			=> $isi_laporan,
				'foto'					=> $foto,
			);

			$this->M_pengaduan->insert_data($data, 'pengaduan');
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

