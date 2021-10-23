<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Game extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Game',
            'isi' => 'admin/game'
        ];
        $data['notif'] =  $this->M_diamond->notif();
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['game'] = $this->db->get('tb_game')->result_array();
        $this->load->view('layout_backend/v_isi', $data);
    }
    public function tambah()
    {
        $nm_game = $this->input->post('nm_game');
        $keterangan = $this->input->post('keterangan');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar) {
            $config['upload_path'] = './assets/gambar_game/';
            $config['allowed_types'] = 'jpg|jpeg|png|';
            $config['max_size'] = '4096';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'nm_game' => $nm_game,
            'keterangan' => $keterangan,
            'gambar' => $gambar
        );
        $this->db->insert('tb_game', $data);


        redirect('admin/game', 'refresh');
    }
    public function hapus()
    {
        $id_game = $this->input->post('id_game');

        $this->db->where('id_game', $id_game);
        $this->db->delete('tb_game');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

        redirect('admin/game', 'refresh');
    }
}

/* End of file Game.php */
