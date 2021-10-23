<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'isi' => 'admin/dashboard',

        ];
        $data['notif'] =  $this->M_diamond->notif();
        $this->load->view('layout_backend/v_isi', $data);
    }
}

/* End of file Dashboard.php */
