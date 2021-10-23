<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'isi' => 'dashboard'
        ];
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
        $data['game'] = $this->db->get('tb_game')->result_array();
        $data['notif'] = $this->M_diamond->notif_user();
        $this->load->view('layout/v_isi', $data, FALSE);
        // var_dump($data['user']);    
    }
    public function reset_notif()
    {
        $id_user = $this->session->userdata('id_user');
        $data['pesanan'] = $this->db->get_where('tb_faktur', ['id_user' => $id_user])->row_array();
        $notif = $data['pesanan']['status_notif'];
        $this->db->set('status_notif', '0');
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_faktur');

        redirect('diamond/riwayat_order');
    }
    // public function kontak()
    // {
    //     $data = [
    //         'judul' => 'Dashboard',
    //         'isi' => 'v_kontak'
    //     ];
    //     $id_user = $this->session->userdata('id_user');
    //     $data['user'] = $this->db->get_where('tb_user', $id_user)->row_array();
    //     $data['game'] = $this->db->get('tb_game')->result_array();
    //     $this->load->view('layout/v_isi', $data, FALSE);
    // }
}

/* End of file Dashboard.php */
