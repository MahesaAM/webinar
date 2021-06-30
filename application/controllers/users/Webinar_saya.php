<?php
class Webinar_saya extends CI_Controller {
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
        $id = $this->session->users_id;
        $x['webinar'] = $this->M_webinar->get_webinar_saya($id);
        $this->load->view('users/template/V_header', $x);
        $this->load->view('users/V_webinar_saya', $x);
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
    function absen() {
        $id_users = $this->input->post('id_users');
        $id_webinar = $this->input->post('id_webinar');
        $this->M_webinar->absen($id_users,$id_webinar);
        redirect('users/Webinar_saya');
    }
    function print_sertif() {
        $id = $this->uri->segment(4);
        $id_users = $this->uri->segment(5);
        $x['users'] = $this->db->get_where('tbl_users', ['users_id' => $id_users ])->row_array();
        $x['sertif'] = $this->db->get_where('tbl_sertif', ['sertif_webinar_id' => $id ] )->row_array();
        $this->load->view('users/V_print_sertif', $x); 
    }
}