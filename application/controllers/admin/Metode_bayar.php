<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Metode_bayar extends CI_Controller
{

  public function index()
  {
    $data =
      [
        'judul' => 'Metode Bayar',
        'isi' => 'admin/metode_bayar'
      ];
    $data['notif'] =  $this->M_diamond->notif();
    $id_user = $this->session->userdata('id_user');
    $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
    $data['metode'] = $this->db->get('metode_bayar')->result_array();
    $this->load->view('layout_backend/v_isi', $data);
    // var_dump($data['metode']);
  }
  public function tambah()
  {
    $metode_bayar = $this->input->post('metode_bayar');
    $keterangan = $this->input->post('keterangan');
    $gambar = $_FILES['gambar_metode']['name'];
    if ($gambar) {
      $config['upload_path'] = './assets/metode_bayar/';
      $config['allowed_types'] = 'jpg|jpeg|png|';
      $config['max_size'] = '4096';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar_metode')) {
        $gambar = $this->upload->data('file_name');
      } else {
        echo $this->upload->display_errors();
      }
    }

    $data = array(
      'metode_bayar' => $metode_bayar,
      'keterangan' => $keterangan,
      'gambar_metode' => $gambar
    );
    $this->db->insert('metode_bayar', $data);

    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil disimpan!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');


    redirect('admin/metode_bayar', 'refresh');
  }
  public function hapus()
  {
    $id_metode_bayar = $this->input->post('id_metode_bayar');
    $where = array('id_metode_bayar' => $id_metode_bayar);
    $this->db->delete('metode_bayar', $where);

    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
    redirect('admin/metode_bayar', 'refresh');
  }
  public function edit()
  {
    $metode_bayar = $this->input->post('metode_bayar');
    $id_metode_bayar = $this->input->post('id_metode_bayar');
    $keterangan = $this->input->post('keterangan');

    $data = array(
      'metode_bayar' => $metode_bayar,
      'keterangan' => $keterangan
    );
    $this->db->where('id_metode_bayar', $id_metode_bayar);
    $this->db->update('metode_bayar', $data);

    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil diubah!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');


    redirect('admin/metode_bayar', 'refresh');
  }
}

/* End of file Metode_bayar.php */
