<?php
class Provinsi extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (empty($this->session->admin_email)) {
            redirect('Home');
        }
        $this->load->model('M_provinsi');
    }

    function index() {
        $x['title'] = "Provinsi";
        $x['provinsi'] = $this->M_provinsi->get_provinsi();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_provinsi', $x);
        $this->load->view('admin/template/V_footer');
    } 
    function tambah_provinsi() {
        $provinsi = $this->input->post('provinsi');
        $this->M_provinsi->tambah_provinsi($provinsi);
        redirect('admin/Provinsi');
    }
    function edit_provinsi() {
        $id = $this->input->post('id');
        $provinsi = $this->input->post('provinsi');
        $this->M_provinsi->edit_provinsi($id,$provinsi);
        redirect('admin/Provinsi');
    }
    function hapus_provinsi() {
        $id = $this->input->post('id');
        $this->M_provinsi->hapus_provinsi($id);
        redirect('admin/Provinsi');
    }
}