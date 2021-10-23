<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Diamond',
            'isi' => 'user/v_profile'
        ];
        $id_user = $this->session->userdata('id_user');
        $data['notif'] = $this->M_diamond->notif_user();
        $data['user'] = $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
        // $data['diamond'] = $this->db->get_where('tb_diamond', array('id_game' => $id))->result_array();
        $this->load->view('layout/v_isi', $data, FALSE);
    }
    public function edit()
    {
        $this->_rules();
        if ($this->form_validation->run() ==  FALSE) {
            $this->index();
        } else {
            $this->M_user->edit_user();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Profile Berhasil Diubah!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

            redirect('profile/index');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        // $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');
    }
}

/* End of file Profile.php */
