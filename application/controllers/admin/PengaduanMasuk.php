<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaduanMasuk extends CI_Controller {

	public function index()
	{
		$this->load->model('M_pengaduan');
		$data['pengaduan'] = $this->M_pengaduan->show_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/pengaduanmasuk', $data);
		$this->load->view('template/footer');
	}

	public function process_transaksi() {
        // Mengambil data dari tabel transaksi_masuk
        $this->db->select('*');
        $query = $this->db->get('pengaduan_masuk');
        $result = $query->result();

        // Memasukkan data ke dalam tabel transaksi_diproses
        if (!empty($result)) {
            foreach ($result as $row) {
                $data = array(
                    'id_user' 			=> $row->id_user,
                    'id_kategori' 		=> $row->id_kategori,
					'nik'				=> $row->nik,
                    'nama' 				=> $row->nama,
					'rt_rw' 			=> $row->rt_rw,
                    'alamat_pelapor' 	=> $row->alamat_pelapor,
					'tanggal' 			=> $row->tanggal,
                    'jenis_pengaduan' 	=> $row->jenis_pengaduan,
					'isi_laporan' 		=> $row->isi_laporan,
                    'foto' 				=> $row->foto,
					'id_petugas' 		=> $row->id_petugas,
                    'tanggal_diproses' 	=> $row->tanggal_diproses,
					'file' 				=> $row->file,
                );
                $this->db->insert('pengaduan_proses', $data);
            }
        }

        // Menghapus data dari tabel transaksi_masuk
        $this->db->empty_table('pengaduan_masuk');
        
        // Redirect atau berikan pesan berhasil
        redirect('admin/pengaduanmasuk');
    }
}
