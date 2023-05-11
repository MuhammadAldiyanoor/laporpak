<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RT extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_rt');
    }

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/rt');
		$this->load->view('template/footer');
	}

	public function tambahrt()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambahrt');
		$this->load->view('template/footer');
	}
	
	public function _rules()
	{
	$this->form_validation->set_rules('id_rt','rt','required');
	$this->form_validation->set_rules('id_rt','rt','required');
	$this->form_validation->set_rules('id_rt','rt','required');
	// $this->form_validation->set_rules('id_komoditas','id_komoditas','required');
	}
	public function tambah_data_aksi()
	{
		// $this->load->model('M_rt');
		
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			
		}else{
			$id_rt	  	      = $this->input->post('id_rt');
			$rt  	 		  = $this->input->post('rt');

			$data = array(
				'id_rt'		=> $id_rt,
				'rt'		=> $rt,
			);

			// $this->M_rt->insert_data($data, 'rt');
			$this->db->insert('rt', $data);

			$id_rw	  	      = $this->input->post('id_rw');
			$rw  	 		  = $this->input->post('rw');

			$data2 = array(
				'id_rw'		=> $id_rw,
				'rw'		=> $rw,
			);

			// $this->M_rt->insert_data($data2, 'rw');
			$this->db->insert('admin/rw', $data2);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('admin/rt');
		}
	}
}
