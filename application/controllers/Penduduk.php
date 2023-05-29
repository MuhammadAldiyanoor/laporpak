<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function index()
	{
		$this->load->model('M_penduduk');
		$data['penduduk'] = $this->M_penduduk->show_data();
		// var_dump($data);exit;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/penduduk', $data);
		$this->load->view('template/footer');
	}

	public function tambah_penduduk()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambahpenduduk_2');
		$this->load->view('template/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_masyarakat','nama','tanggal_lahir','alamat','agama','nik','jenis_kelamin','pekerjaan','id_level','username','password','required');
	
	}

	public function tambah_data_aksi()
{
    $this->load->model('M_penduduk');
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
        // Handle form validation errors if needed
    } else {
        // Get input data
        $id_masyarakat = $this->input->post('id_masyarakat');
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $alamat = $this->input->post('alamat');
        $agama = $this->input->post('agama');
        $nik = $this->input->post('nik');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pekerjaan = $this->input->post('pekerjaan');
        $id_level = $this->input->post('id_level');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Check if the provided NIK exists in the 'masyarakat' table
        $nik_exists = $this->M_penduduk->cek_penduduk($nik);
        if ($nik_exists != "") {
            // Update username and password based on the existing NIK
            $data2 = array(
                'username' => $username,
                'password' => md5($password)
            );
            $this->db->where('nik', $nik);
            $this->db->update('user', $data2);

            // Display a notification that data is updated
            $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Data updated for NIK: ' . $nik . '!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        } else {
            // Data to be inserted into the 'user' table
            $data2 = array(
                'id_level' => $id_level,
                'username' => $username,
                'password' => md5($password)
            );

            // Insert data into the 'user' table
            $this->db->insert('user', $data2);

            // Get the inserted user's ID
            // $user_id = $this->db->insert_id();

            // Data to be inserted into the 'masyarakat' table
            $data = array(
                'id_masyarakat' => $id_masyarakat,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'alamat' => $alamat,
                'agama' => $agama,
                'nik' => $nik,
                'jenis_kelamin' => $jenis_kelamin,
                'pekerjaan' => $pekerjaan,
                // 'id_user' => $user_id // Assign the user ID to the 'id_user' field
            );

            // Insert data into the 'masyarakat' table
            $this->db->insert('masyarakat', $data);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            } else {
                // If masyarakat insertion failed, delete the previously inserted user
                $this->db->where('id_user', $user_id);
                $this->db->delete('user');

                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal menambahkan data Masyarakat!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            }
        }
        redirect('login');
    }
}




}	