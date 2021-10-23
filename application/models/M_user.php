<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('tb_user')->result_array();
    }
    public function register()
    {
        $nama = $this->input->post('nama', true);
        $no_hp = $this->input->post('no_hp', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $data = array(
            'role_id' => '2',
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'no_hp' => $no_hp,
            'tgl_buat' => time(),
            'gambar' => 'user.png'
        );
        $this->db->insert('tb_user', $data);
    }
    public function edit_user()
    {

        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
        $nama = $this->input->post('nama', true);
        $no_hp = $this->input->post('no_hp', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $gambar = $_FILES['gambar']['name'];
        if ($gambar) {
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']      = '10000';
            $config['upload_path'] = './assets/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['tb_user']['gambar'];

                if ($old_image != 'user.png') {
                    unlink(FCPATH . 'assets/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'no_hp' => $no_hp
        );
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_user', $data);
    }
}

/* End of file m_model.php */
