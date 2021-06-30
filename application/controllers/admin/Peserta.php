<?php
class Peserta extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (empty($this->session->admin_email)) {
            redirect('Home');
        }
        $this->load->library('form_validation');
        $this->load->model('M_peserta');
        $this->load->model('M_provinsi');
        $this->load->model('M_profesi');
    }

    function index() {
        $x['title'] = "Peserta";
        $x['peserta'] = $this->M_peserta->get_peserta();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_peserta', $x);
        $this->load->view('admin/template/V_footer');
    }
    function v_tambah_peserta() {
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[tbl_users.users_email]');
        $this->form_validation->set_rules('phone','Phone', 'required|trim');
        $this->form_validation->set_rules('profesi','Profesi', 'required');
        $this->form_validation->set_rules('instansi','Instansi', 'required|trim');
        $this->form_validation->set_rules('provinsi','Provinsi', 'required');
        $this->form_validation->set_rules('password','Password', 'required|trim|min_length[5]|matches[password_c]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password_c','Password_c', 'required|trim|matches[password]');

        if($this->form_validation->run() == false) {
            $x['title'] = "Tambah Peserta";
            $x['provinsi'] = $this->M_provinsi->get_provinsi();
            $x['profesi'] = $this->M_profesi->get_profesi();
            $this->load->view('admin/template/V_header', $x);
            $this->load->view('admin/V_tambah_peserta', $x);
            $this->load->view('admin/template/V_footer');
        }else{
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $profesi = $this->input->post('profesi');
            $instansi = $this->input->post('instansi');
            $provinsi = $this->input->post('provinsi');
            $password = md5($this->input->post('password'));
            $active = 1;

            $this->M_peserta->tambah_peserta($nama,$email,$phone,$profesi,$instansi,$provinsi,$password,$active);
            redirect('admin/Peserta');
        }
    }
    function v_edit_peserta() {
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone','Phone', 'required|trim');
        $this->form_validation->set_rules('profesi','Profesi', 'required');
        $this->form_validation->set_rules('instansi','Instansi', 'required|trim');
        $this->form_validation->set_rules('provinsi','Provinsi', 'required');
        $this->form_validation->set_rules('password','Password', 'trim|min_length[5]|matches[password_c]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password_c','Password_c', 'trim|matches[password]');

        if($this->form_validation->run() == false) {
            $x['title'] = "Tambah Peserta";
            $id = $this->uri->segment(4);
            $x['p'] = $this->db->get_where('tbl_users', ['users_id' => $id]  )->row_array();
            $x['provinsi'] = $this->M_provinsi->get_provinsi();
            $x['profesi'] = $this->M_profesi->get_profesi();
            $this->load->view('admin/template/V_header', $x);
            $this->load->view('admin/V_edit_peserta', $x);
            $this->load->view('admin/template/V_footer');
        }else{
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $profesi = $this->input->post('profesi');
            $instansi = $this->input->post('instansi');
            $provinsi = $this->input->post('provinsi');
            $password = $this->input->post('password');
            if (!empty($password)) {
                $p = md5($this->input->post('password'));
            }else{
                $p = $this->input->post('password_default');
            }
            $this->db->query("UPDATE tbl_users SET users_nama = '$nama', users_email = '$email', users_phone = '$phone', users_profesi = '$profesi', users_instansi = '$instansi', users_provinsi = '$provinsi', users_password = '$p' WHERE users_id = '$id'  ");
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-success-style1">
            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                </button>
            <p><strong>Berhasil..</strong>Data Berhasil Di Ubah.</p>
        </div>');
            redirect('admin/Peserta/v_edit_peserta/'.$id);
        }
    }
    function hapus_peserta() {
        $id = $this->input->post('id');
        $this->db->query("DELETE FROM tbl_users WHERE users_id = '$id' ");
        redirect('admin/Peserta');
    }
}