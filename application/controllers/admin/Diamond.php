<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Diamond extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Diamond',
            'isi' => 'admin/diamond'
        ];
        $data['notif'] =  $this->M_diamond->notif();
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['diamond'] = $this->db->query('SELECT tb_diamond.*, tb_game.* FROM tb_diamond, tb_game
        WHERE tb_diamond.id_game=tb_game.id_game')->result_array();
        $data['game'] = $this->db->get('tb_game')->result_array();
        $this->load->view('layout_backend/v_isi', $data);
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nm_game', 'Nama Game', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Diamond', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga Diamond', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $harga_upselling = $this->input->post('harga_upselling');
            $id_game = $this->input->post('nm_game');
            $jumlah = $this->input->post('jumlah');
            $harga = $this->input->post('harga');
            $upselling = $this->input->post('upselling');
            $h1 =  preg_replace('/[Rp. ]/', '', $harga);
            $har_up =  preg_replace('/[Rp. ]/', '', $harga_upselling);
            // var_dump($h1);

            $data = array(
                'id_game' => $id_game,
                'harga' => $h1,
                'harga_upselling' => $har_up,
                'jumlah' => $jumlah,
                'up_selling' => $upselling
            );
            $this->db->insert('tb_diamond', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil disimpan!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

            redirect('admin/diamond', 'refresh');
        }
    }
    public function hapus()
    {
        $id_diamond = $this->input->post('id_diamond');

        $this->db->where('id_diamond', $id_diamond);
        $this->db->delete('tb_diamond');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

        redirect('admin/diamond', 'refresh');
    }
    public function edit()
    {
        $this->form_validation->set_rules('nm_game', 'Nama Game', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Diamond', 'trim|required|numeric');
        $this->form_validation->set_rules('harga', 'Harga Diamond', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $harga_upselling = $this->input->post('harga_upselling');

            $id_game = $this->input->post('id_game');
            $id_diamond = $this->input->post('id_diamond');
            $jumlah = $this->input->post('jumlah');
            $harga = $this->input->post('harga');
            $upselling = $this->input->post('upselling');

            $data = array(
                'id_game' => $id_game,
                'harga' => $harga,
                'harga_upselling' => $harga_upselling,
                'jumlah' => $jumlah,
                'up_selling' => $upselling
            );
            $this->db->where('id_diamond', $id_diamond);
            $this->db->update('tb_diamond', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil disimpan!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

            redirect('admin/diamond', 'refresh');
        }
    }
    public function pembayaran()
    {
    }
}

/* End of file Diamond.php */
