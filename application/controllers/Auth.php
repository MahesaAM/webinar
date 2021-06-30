<?php
class Auth extends CI_Controller {

    function index() {
        $this->load->view('V_auth');
    }

    function login() {
            $e=$this->input->post('email');
            $p=md5($this->input->post('password'));

            $users = $this->db->get_where('tbl_users', ['users_email' => $e, 'users_password' => $p])->row_array();
            $admin = $this->db->get_where('tbl_admin', ['admin_email' => $e, 'admin_password' => $p])->row_array();
            
            if ($admin) {
                $data = [
                    'admin_id' => $admin['admin_id'],
                    'admin_nama' => $admin['admin_nama'],
                    'admin_email' => $admin['admin_email']
                ];
                $this->session->set_userdata($data);
                redirect('admin/Dashboard');
            }else if($users) {
                if ($users['users_active']==1) {
                    $data = [
                        'users_id' => $users['users_id'],
                        'users_nama' => $users['users_nama'],
                        'users_email' => $users['users_email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('users/Dashboard');
                }else{
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-mg-b" role="alert">
                    Akun Anda Belum Active, Silahkan Konfirmasi Melalui Email Anda
                    </div>');
                    redirect('Auth');
                }
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-mg-b" role="alert">
                Email / Password Salah
                </div>');
                redirect('Auth');
            }
    }
    function verify() {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $users = $this->db->get_where('tbl_users', ['users_email' => $email ] )->row_array();

        if($users) {
            $users_token = $this->db->get_where('users_token', ['token_code' => $token ] )->row_array();
            if ($users_token) {
                $this->db->query("UPDATE tbl_users SET users_active = 1 WHERE users_email = '$email' ");
                $this->db->query("DELETE FROM users_token WHERE token_email = '$email' ");
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-mg-b" role="alert">
                '.$email.' Sudah Di Aktifkan! Silahkan Login
                </div>');
                redirect('Auth');
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-mg-b" role="alert">
                Aktifasi Gagal! Token Salah
                </div>');
                redirect('Auth');
            }
        }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-mg-b" role="alert">
                Aktifasi Gagal! Email Salah
                </div>');
                redirect('Auth');
        }
    }
    function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_nama');
        $this->session->unset_userdata('admin_email');
        $this->session->unset_userdata('users_id');
        $this->session->unset_userdata('users_nama');
        $this->session->unset_userdata('users_email');
        redirect('Auth');
    }
}