<?php
class Webinar extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (empty($this->session->users_email)) {
            redirect('Home');
        }
        $this->load->model('M_webinar');
        $this->load->model('M_pembicara');
    }

    function index() {
        $x['title'] = "Webinar";
        $x['webinar'] = $this->M_webinar->get_webinar_active();
        $this->load->view('users/template/V_header', $x);
        $this->load->view('users/V_webinar', $x);
        $this->load->view('users/template/V_footer');
    }
    function v_pembicara() {
        $id_webinar = $this->uri->segment(4);
        $x['title'] = "Pembicara";
        $x['pembicara'] = $this->M_pembicara->get_pembicara($id_webinar);
        $this->load->view('users/template/V_header', $x);
        $this->load->view('users/V_pembicara', $x);
        $this->load->view('users/template/V_footer');
    }
    function V_checkout() {
        $x['title'] = "Check Out";
        $id = $this->uri->segment(4);
        $x['w'] = $this->db->get_where('tbl_webinar', ['webinar_id' => $id ])->row_array();
        $this->load->view('users/template/V_header', $x);
        $this->load->view('users/V_chekout', $x);
        $this->load->view('users/template/V_footer');
    }
    function daftar_webinar_free() {
        $id_users = $this->input->post('id_users');
        $id_webinar = $this->input->post('id_webinar');
        $status = 1;
        $this->M_webinar->daftar_webinar_free($id_users,$id_webinar,$status);
        redirect('users/Webinar');
    }
    function daftar_webinar_berbayar() {
        $id_users = $this->input->post('id_users');
        $id_webinar = $this->input->post('id_webinar');
        $bukti = $this->input->post('bukti');
        $status = 0;
        $config['upload_path']          = './bukti_pembayaran/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 0;
        $config['remove_spaces']        = FALSE;
        $this->load->library('upload', $config);
        if ( $this->upload->do_upload('bukti')) {
            $this->upload->data();
        }
        $this->M_webinar->daftar_webinar_berbayar($id_users,$id_webinar,$_FILES['bukti']['name'],$status);
        redirect('users/Webinar');
    }
    function absen() {
        $id_users = $this->input->post('id_users');
        $id_webinar = $this->input->post('id_webinar');
        $this->M_webinar->absen($id_users,$id_webinar);
        redirect('users/Webinar');
    }
}