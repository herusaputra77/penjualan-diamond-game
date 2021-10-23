<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

    public function cek_login()
    {
        $email = set_value('email');
        $password = set_value('password');
        $result = $this->db->where('email', $email)
            ->where('password', $password)
            ->limit(1)
            ->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->row_array();
        } else {
            return array();
        }
    }
}

/* End of file M_auth.php */
