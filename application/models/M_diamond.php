<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_diamond extends CI_Model
{
    public function tampil_diamond()
    {
        $id_game = $this->input->post('id_game');
        $id_diamond = $this->input->post('id_diamond');

        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $result = $this->db->query("SELECT tb_diamond.*, tb_game.* FROM tb_game, tb_diamond 
        WHERE tb_game.id_game=tb_diamond.id_game
        AND tb_game.id_game= $id_game 
        AND tb_diamond.id_diamond = $id_diamond");
        return $result->row_array();
    }
    public function pembayaran()
    {
        $id_game = $this->input->post('id_game');
        $id_diamond = $this->input->post('id_diamond');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $harga_upselling = $this->input->post('harga_upselling');

        $id_akun = $this->input->post('id_akun');
        $metode_bayar = $this->input->post('metode_bayar');
        $id_user = $this->session->userdata('id_user');
             $hrg = $harga;
        if ($harga_upselling == 0) {
       } else {
            $hrg = $harga_upselling;
        }

        $data = array(
            'tgl_pembelian' => date('Y-m-d'),
            'id_user' => $id_user,
            'metode_bayar' => $metode_bayar,
            'id_game' => $id_game,
            'id_akun' => $id_akun,
            'id_diamond' => $id_diamond,
            'harga' => $hrg,
            'jumlah' => $jumlah
        );
        $this->db->insert('tb_faktur', $data);

        $id_faktur = $this->db->insert_id();
        $data = [
            'id_faktur' => $id_faktur,
            'status_bayar' => 0
        ];
        $this->db->insert('status_bayar', $data);
    }

    public function view_order()
    {
        $id_user =
            $this->session->userdata('id_user');

        $hasil = $this->db->query("SELECT tb_faktur.id_faktur, tb_faktur.jumlah, tb_faktur.harga, tb_faktur.tgl_pembelian, metode_bayar.metode_bayar, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar FROM status_bayar, tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND tb_faktur.id_faktur=status_bayar.id_faktur
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        AND tb_user.id_user=$id_user
        AND status_bayar.status_bayar=0
        ORDER BY tb_faktur.tgl_pembelian DESC
        ")->result_array();
        return $hasil;
    }
    public function view_riwayat_order()
    {
        $id_user =
            $this->session->userdata('id_user');

        $hasil = $this->db->query("SELECT tb_faktur.id_faktur, tb_faktur.jumlah, tb_faktur.harga, tb_faktur.tgl_pembelian, metode_bayar.metode_bayar, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar FROM status_bayar, tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND tb_faktur.id_faktur=status_bayar.id_faktur
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        AND tb_user.id_user=$id_user
        AND status_bayar.status_bayar=1
        ORDER BY tb_faktur.tgl_pembelian DESC
        ")->result_array();
        return $hasil;
    }
    public function view_order_admin()
    {
        $hasil = $this->db->query("SELECT tb_faktur.*, tb_user.nama, metode_bayar.metode_bayar, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar
        FROM tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond, status_bayar
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND status_bayar.id_faktur=tb_faktur.id_faktur
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        ORDER BY tb_faktur.tgl_pembelian DESC
        ")->result_array();
        return $hasil;
    }
    public function view_by_date($date)
    {
        $hasil = $this->db->query("SELECT tb_faktur.*, tb_user.nama, metode_bayar.metode_bayar, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar
        FROM tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond, status_bayar
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND status_bayar.id_faktur=tb_faktur.id_faktur
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        AND tb_faktur.tgl_pembelian = '$date'
        ORDER BY tb_faktur.tgl_pembelian DESC
        ")->result_array();
        return $hasil;
    }
    public function view_by_month($month, $year)
    {
        $hasil = $this->db->query("SELECT tb_faktur.*, tb_user.nama, metode_bayar.metode_bayar, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar
        FROM tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond, status_bayar
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND status_bayar.id_faktur=tb_faktur.id_faktur
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        AND month(tb_faktur.tgl_pembelian) = '$month'
        AND year(tb_faktur.tgl_pembelian) = '$year'
        ORDER BY tb_faktur.tgl_pembelian DESC
        ")->result_array();
        return $hasil;
    }
    public function view_by_year($year)
    {
        $hasil = $this->db->query("SELECT tb_faktur.*, tb_user.nama, metode_bayar.metode_bayar, tb_game.nm_game, tb_game.gambar, status_bayar.status_bayar
        FROM tb_faktur, tb_user, tb_game, metode_bayar, tb_diamond, status_bayar
        WHERE tb_faktur.id_user=tb_user.id_user
        AND tb_faktur.metode_bayar=metode_bayar.id_metode_bayar
        AND tb_faktur.id_game=tb_game.id_game
        AND status_bayar.id_faktur=tb_faktur.id_faktur
        AND tb_faktur.id_diamond=tb_diamond.id_diamond
        AND year(tb_faktur.tgl_pembelian) = '$year'
        ORDER BY tb_faktur.tgl_pembelian DESC
        ")->result_array();
        return $hasil;
    }
    public function notif()
    {
        $result = $this->db->query("SELECT COUNT(tb_faktur.status_diamond)as notif From tb_faktur, status_bayar
        WHERE tb_faktur.id_faktur=status_bayar.id_faktur
        AND tb_faktur.status_diamond=0")->row_array();
        return $result;
    }
    public function notif_user()
    {
        $id_user = $this->session->userdata('id_user');
        $result = $this->db->query("SELECT COUNT(tb_faktur.status_notif)as notif From tb_faktur, status_bayar
        WHERE tb_faktur.id_faktur=status_bayar.id_faktur
        AND tb_faktur.id_user='$id_user'
        AND tb_faktur.status_notif=1")->row_array();
        return $result;
    }
}

/* End of file M_diamond.php */
