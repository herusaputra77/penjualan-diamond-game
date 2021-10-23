<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function index()
  {

    $data = [
      'judul' => 'User',
      'isi' => 'admin/user'
    ];
    $id_user = $this->session->userdata('id_user');
    $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
    $data['customer'] = $this->M_user->tampil_data();
    $data['notif'] =  $this->M_diamond->notif();
    $this->load->view('layout_backend/v_isi', $data);
  }
  public function hapus()
  {
    $id_user = $this->input->post('id_user');

    $this->db->where('id_user', $id_user);
    $this->db->delete('tb_user');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

    redirect('admin/user', 'refresh');
  }
}

/* End of file User.php */
