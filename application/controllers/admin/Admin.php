<?php
class Admin extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (empty($this->session->admin_email)) {
            redirect('Home');
        }
        $this->load->library('form_validation');
        $this->load->model('M_admin');
    }

    function index() {
        $x['title'] = "Admin";
        $x['admin'] = $this->M_admin->get_admin();
        $h = $this->load->view('admin/template/V_header', $x);
        $h = $this->load->view('admin/V_admin', $x);
        $h = $this->load->view('admin/template/V_footer');
    }
    function v_tambah_admin() {
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[tbl_users.users_email]');
        $this->form_validation->set_rules('password','Password', 'required|trim|min_length[5]|matches[password_c]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password_c','Password_c', 'required|trim|matches[password]');

        if($this->form_validation->run() == false) {
            $x['title'] = "Tambah Admin";
            $this->load->view('admin/template/V_header', $x);
            $this->load->view('admin/V_tambah_admin', $x);
            $this->load->view('admin/template/V_footer');
        }else{
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $this->M_admin->tambah_admin($nama,$email,$password);
            redirect('admin/Admin');
        }
    }
    function v_edit_admin() {
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password','Password', 'trim|min_length[5]|matches[password_c]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password_c','Password_c', 'trim|matches[password]');

        if($this->form_validation->run() == false) {
            $x['title'] = "Tambah Admin";
            $id = $this->uri->segment(4);
            $x['a'] = $this->db->get_where('tbl_admin', ['admin_id' => $id]  )->row_array();
            $this->load->view('admin/template/V_header', $x);
            $this->load->view('admin/V_edit_admin', $x);
            $this->load->view('admin/template/V_footer');
        }else{
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if (!empty($password)) {
                $p = md5($this->input->post('password'));
            }else{
                $p = $this->input->post('password_default');
            }
            $this->db->query("UPDATE tbl_admin SET admin_nama = '$nama', admin_email = '$email', admin_password = '$p' WHERE admin_id = '$id'  ");
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-success-style1">
            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                </button>
            <p><strong>Berhasil..</strong>Data Berhasil Di Ubah.</p>
        </div>');
            redirect('admin/Admin/v_edit_admin/'.$id);
        }
    }
    function hapus_admin() {
        $id = $this->input->post('id');
        $this->M_admin->hapus_admin($id);
        redirect('admin/Admin');
    }
}