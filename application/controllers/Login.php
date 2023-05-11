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

	// public function auth()
   	// {
    //     $this->form_validation->set_rules('username', 'username', 'trim|required');
    //     $this->form_validation->set_rules('password', 'password', 'trim|required');
    //     if ($this->form_validation->run() != false) {
    //         $data_login = array(
    //             'username' => htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES),
    //             'password' => md5(htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES)),
    //         );
    //         $user = $this->m_akun->login($this->security->xss_clean($data_login));
    //         if ($user->num_rows() > 0) {
    //             $data = $user->row_array();
    //             $this->session->set_userdata('login', TRUE);
    //             $this->session->set_userdata('username', $data['username']);
	// 			$this->session->set_userdata('password', $data['password']);
    //             $this->session->set_userdata('id_level', $data['id_level']);
    //             redirect(base_url());
    //         } else {
    //             $this->session->set_flashdata('gagal', 'Username atau password salah!');
    //             redirect(base_url('login'));
    //         }
    //     }
    // }
		public function auth()
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Username dan Password wajib diisi !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('login');
    } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_akun->cek_login($username, $password);

        if (!$cek) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username atau Password salah !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('login');
        } else {
            // Jangan menyimpan password di session
            $this->session->set_userdata('id_level', $cek->id_level);
            $this->session->set_userdata('username', $cek->username);
            $this->session->set_userdata('password', $cek->password);

            switch ($cek->id_level) {
                case 1:
                    redirect('admin/dashboard');
                    break;
				case 2:
                    redirect('petugas/dashboard');
                    break;
                case 3:
                    redirect('penduduk/dashboard');
                    break;
                default:
                    // Jika id_level tidak sesuai, hapus session dan redirect ke halaman login
                    $this->session->unset_userdata('id_level');
                    $this->session->unset_userdata('username');
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Anda tidak memiliki akses ke halaman ini !</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('login');
                    break;
            }
        }
    }
}

   	// public function auth()
	// {
	// 	$this->_rules();

	// 	if ($this->form_validation->run() == FALSE) {
	// 	} else {
	// 		$username = $this->input->post('username');
	// 		$password = $this->input->post('password');
			
	// 		$cek = $this->M_akun->cek_login($username, $password);

	// 		if ($cek == FALSE) {
	// 			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 			<strong>Username atau Password salah !</strong>
	// 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 		  	<span aria-hidden="true">&times;</span>
	// 			</button>
	// 	  		</div>');
	// 			redirect('login');
	// 		} else {
	// 			$this->session->set_userdata('id_level', $cek->id_level);
	// 			$this->session->set_userdata('username', $cek->username);
	// 			$this->session->set_userdata('password', $cek->password);
	// 			switch ($cek->id_level) {
	// 				case 1:
	// 					redirect('admin/dashboard');
	// 					break;
	// 				case 2:
	// 					redirect('penduduk/dashboardpenduduk');
	// 					break;
	// 				default:
	// 					break;
	// 			}
	// 		}
	// 	}
	// }

	// public function _rules()
	// {
	// 	$this->form_validation->set_rules('username', 'username', 'required');
	// 	$this->form_validation->set_rules('password', 'password', 'required');
	// }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}