<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Diamond extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 Anda Belum Login !!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
            redirect('auth/login');
        }
    }

    public function index($id)
    {
        $data = [
            'judul' => 'Diamond',
            'isi' => 'v_diamond'
        ];
        $id_user = $this->session->userdata('id_user');
        $data['notif'] = $this->M_diamond->notif_user();
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['diamond'] = $this->db->get_where('tb_diamond', array('id_game' => $id))->result_array();
        $this->load->view('layout/v_isi', $data, FALSE);
    }

    public function metode_bayar()
    {
        $data = [
            'judul' => 'Diamond',
            'isi' => 'v_metode_bayar'
        ];
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['pembelian'] = $this->M_diamond->tampil_diamond();
        $data['notif'] = $this->M_diamond->notif_user();
        $data['metode'] = $this->db->get('metode_bayar')->result_array();
        $this->load->view('layout/v_isi', $data, FALSE);
    }
    
    public function pembayaran()
    {

        $this->form_validation->set_rules('id_akun', 'ID Akun', 'required|trim');
        $this->form_validation->set_rules('metode_bayar', 'Metode Bayar', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Diamond',
                'isi' => 'v_metode_bayar'
            ];
            $id_user = $this->session->userdata('id_user');
            $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
            $data['pembelian'] = $this->M_diamond->tampil_diamond();
            $data['notif'] = $this->M_diamond->notif_user();
            $data['metode'] = $this->db->get('metode_bayar')->result_array();
            $this->load->view('layout/v_isi', $data, FALSE);
        } else {
            $this->M_diamond->pembayaran();

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 Pembelian akan diproses!!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
            redirect('diamond/order');
        }
    }
    public function order()
    {
        $data = [
            'judul' => 'Diamond',
            'isi' => 'v_pesanan'
        ];
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['notif'] = $this->M_diamond->notif_user();
        $data['order'] = $this->M_diamond->view_order();
        $this->load->view('layout/v_isi', $data, FALSE);
    }
    public function riwayat_order()
    {
        $data = [
            'judul' => 'Diamond',
            'isi' => 'riwayat_order'
        ];
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['order'] = $this->M_diamond->view_riwayat_order();
        $data['notif'] = $this->M_diamond->notif_user();
        $this->load->view('layout/v_isi', $data, FALSE);
    }
    public function hapus_order()
    {
        $id_faktur = $this->input->post('id_faktur');

        $this->db->where('id_faktur', $id_faktur);
        $this->db->delete('tb_faktur');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

        redirect('diamond/order', 'refresh');
    }

    public function bayar($id_faktur)
    {
        $data = [
            'judul' => 'Detail Pembayaran',
            'isi' => 'v_bayar'
        ];
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['notif'] = $this->M_diamond->notif_user();
        $data['order'] = $this->db->query("SELECT tb_faktur.*, metode_bayar.metode_bayar, metode_bayar.gambar_metode, metode_bayar.keterangan, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar FROM tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond, status_bayar
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        AND tb_faktur.id_faktur= status_bayar.id_faktur
        AND tb_user.id_user=$id_user
        AND tb_faktur.id_faktur=$id_faktur
        ORDER BY tb_faktur.tgl_pembelian DESC")->row_array();
        $this->load->view('layout/v_isi', $data, FALSE);
        // var_dump($data['order']);
    }
    public function bukti_pembayaran()
    {
        $bukti_pembayaran =  $gambar = $_FILES['bukti_pembayaran']['name'];
        if ($gambar) {
            $config['upload_path'] = './assets/bukti_pembayaran/';
            $config['allowed_types'] = 'jpg|jpeg|png|';
            $config['max_size'] = '4096';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('bukti_pembayaran')) {
                $gambar = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        $id_faktur = $this->input->post('id_faktur');
        $redirect = $this->input->post('redirect');
        $this->db->set('status_bayar', '1');
        $this->db->set('bukti_pembayaran', $bukti_pembayaran);
        $this->db->where('id_faktur', $id_faktur);
        $this->db->update('status_bayar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil Diubah!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

        redirect($redirect, 'refresh');
    }
}

/* End of file Diamond.php */
