<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_auth');

        $this->load->library('form_validation');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/login');
        } else {
            $auth = $this->M_auth->cek_login();
            if ($auth == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
						 Email dan Password anda salah!!!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('id_user', $auth['id_user']);
                $this->session->set_userdata('nama', $auth['nama']);
                $this->session->set_userdata('email', $auth['email']);
                $this->session->set_userdata('role_id', $auth['role_id']);
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
						Selamat Datang!!!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
                switch ($auth['role_id']) {
                    case 1:
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function register()
    {
        $data = [
            'judul' => 'Register',
            'isi' => 'user/register'
        ];
        $this->load->view('user/register', $data);
    }
    public function reg_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() ==  FALSE) {
            $this->register();
        } else {
            $this->M_user->register();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Register Berhasil!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

            redirect('auth/login', 'refresh');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Anda Berhasil Keluar!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('dashboard');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');
    }
}

/* End of file Auth.php */
