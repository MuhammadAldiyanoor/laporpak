<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_akun');
    }
	
	public function index()
	{
		$data['title'] = "Login - LAPORPAK";
		$this->load->view('login', $data);
	}

	public function auth()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() != false) {
            $data_login = array(
                'username' => htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES),
                'password' => md5(htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES)),
            );
            $user = $this->m_akun->login($this->security->xss_clean($data_login));
            if ($user->num_rows() > 0) {
                $data = $user->row_array();
                $this->session->set_userdata('user', TRUE);
                $this->session->set_userdata('username', $data['username']);
				$this->session->set_userdata('password', $data['password']);
                $this->session->set_userdata('id_level', $data['id_level']);
                redirect(base_url());
            } else {
                $this->session->set_flashdata('gagal', 'Username atau password salah!');
                redirect(base_url('login'));
            }
        }
    }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}