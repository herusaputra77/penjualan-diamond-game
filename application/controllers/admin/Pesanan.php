<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

    public function index()
    {
        $data =
            [
                'judul' => 'Pesanan',
                'isi' => 'admin/pesanan'
            ];
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['pesanan2'] = $this->M_diamond->view_order_admin();
        $data['notif'] = $this->M_diamond->notif();
        $this->load->view('layout_backend/v_isi', $data, FALSE);
    }
    public function pdf()
    {
        $this->load->library('Dompdf_gen');
        $data['pesanan'] = $this->M_diamond->view_order_admin();
        $this->load->view('admin/laporan_diamond', $data);
        // Get output html
        $html = $this->output->get_output();
        $jenis_kertas = 'A4';
        $orientation = 'potrait';
        $this->dompdf->set_paper($jenis_kertas, $orientation);
        $filename = "laporan_diamond" . date("d-m-Y-H-i-s") . '.pdf';

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream($filename, array('Attachment' => 0));
    }
    public function detail($id)
    {
        $data = [
            'judul' => 'Detail Pesanan',
            'isi' => 'admin/v_detail_pesanan'
        ];
        $data['notif'] = $this->M_diamond->notif();
        $data['pesanan'] = $this->db->query("SELECT tb_faktur.*, tb_user.nama, metode_bayar.metode_bayar, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar, status_bayar.bukti_pembayaran
        FROM tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond, status_bayar
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.id_faktur=$id
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND status_bayar.id_faktur=tb_faktur.id_faktur
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        ORDER BY tb_faktur.tgl_pembelian DESC")->row_array();
        $this->load->view('layout_backend/v_isi', $data, FALSE);
        // var_dump($data['pesanan']);
    }
    public function pengiriman()
    {
        $id_akun = $this->input->post('id_akun', true);
        $redirect = $this->input->post('redirect_page');

        $this->db->set('status_diamond', 1);
        $this->db->set('status_notif', 1);
        $this->db->where('id_akun', $id_akun);
        $this->db->update('tb_faktur');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil diubah!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');

        redirect($redirect, 'refresh');
    }
    public function filter_tgl()
    {
        $filter = $this->input->post('filter');

        if ($filter && !empty($filter)) { // Cek apakah user telah memilih filter dan klik tombol tampilkan

            if ($filter == '1') { // Jika filter nya 1 (per tanggal)
                $tgl = $this->input->post('tanggal');
                $ket = 'Data Transaksi Tanggal ' . date('d-m-y', strtotime($tgl));
                // $url_cetak = 'transaksi/cetak?filter=1&tanggal=' . $tgl;
                $transaksi = $this->M_diamond->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di M_diamond
            } else if ($filter == '2') { // Jika filter nya 2 (per bulan)
                $bulan = $this->input->post('bulan');

                $tahun = $this->input->post('tahun');

                $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                $ket = 'Data Transaksi Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
                // $url_cetak = 'transaksi/cetak?filter=2&bulan=' . $bulan . '&tahun=' . $tahun;
                $transaksi = $this->M_diamond->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di M_diamond
            } else { // Jika filter nya 3 (per tahun)
                $tahun = $this->input->post('tahun');

                $ket = 'Data Transaksi Tahun ' . $tahun;
                // $url_cetak = 'transaksi/cetak?filter=3&tahun=' . $tahun;
                $transaksi = $this->M_diamond->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di M_diamond
            }
        } else { // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            // $url_cetak = 'transaksi/cetak';
            $transaksi = $this->M_diamond->tampil_order(); // Panggil fungsi view_all yang ada di M_diamond
        }

        $data['ket'] = $ket;
        // $data['url_cetak'] = base_url('index.php/' . $url_cetak);
        // $data['option_tahun'] = $this->M_diamond->option_tahun();
        $data['judul'] = 'Pesanan';
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        $data =
            [
                'pesanan2' => $transaksi,
                'notif' => $this->M_diamond->notif(),
                'judul' => 'Pesanan',
                'isi' => 'admin/pesanan'
            ];
        $this->load->view('layout_backend/v_isi', $data, FALSE);
    }
}

/* End of file Pesanan.php */
