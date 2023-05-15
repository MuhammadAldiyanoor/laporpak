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

	// public function edit_kantor($id)
	// {
	// 	$this->load->model('M_tambahkantor');
	// 	$data['barangkantor'] = $this->M_tambahkantor->edit_kantor($id);
	// 	$this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
	// 	$this->load->view('templates/navbar');
    //     $this->load->view('editbarangkantor',$data);
    //     $this->load->view('templates/footer');
	// }

	public function _rules()
	{
		$this->form_validation->set_rules('id_pengaduan','id_kategori','nik','alamat_pelapor','tanggal','lokasi','isi_laporan','foto','required');
		$this->form_validation->set_rules('id_pengaduan','id_kategori','nik','alamat_pelapor','tanggal','lokasi','isi_laporan','foto','required');
		$this->form_validation->set_rules('id_pengaduan','id_kategori','nik','alamat_pelapor','tanggal','lokasi','isi_laporan','foto','required');
		// $this->form_validation->set_rules('id_komoditas','id_komoditas','required');
	}

	public function update_data_aksi()
	{
		$this->load->model('M_pengaduan');
		$this->_rules();
		$id_pengaduan	  	  = $this->input->post('id_pengaduan');
		$id_kategori		  = $this->input->post('id_kategori');
		$nik 	 		  	  = $this->input->post('nik');
		$nama 	 		  	  = $this->input->post('nama');
		$alamat_pelapor 	  = $this->input->post('alamat_pelapor');
		$tanggal 	 		  = $this->input->post('tanggal');
		$lokasi 	 		  = $this->input->post('lokasi');
		$isi_laporan	 	  = $this->input->post('isi_laporan');
		$foto	 		  	  = $this->input->post('foto');


		$data = array(
			'id_pengaduan'			=> $id_pengaduan,
			'id_kategori'			=> $id_kategori,
			'nik'					=> $nik,
			'nama'					=> $nama,
			'alamat_pelapor'		=> $alamat_pelapor,
			'tanggal'				=> $tanggal,
			'lokasi'				=> $lokasi,
			'isi_laporan'			=> $isi_laporan,
			'foto'					=> $foto,
		);
			
			$where = array(
				'id_pengaduan' => $id_pengaduan
			);

			$this->M_pengaduan->update_data('pengaduan', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('dashboard');
	}
}
