<?php
class Pembayaran extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('M_method');
    }

    function index() {
        $x['title'] = "Pembayaran";
        $x['method'] = $this->M_method->get_method();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_pembayaran', $x);
        $this->load->view('admin/template/V_footer');
    }
    function tambah_method() {
        $method = $this->input->post('method');
        $this->M_method->tambah_method($method);
        redirect('admin/Pembayaran');
    }
    function edit_method() {
        $method = $this->input->post('method');
        $id = $this->input->post('id');
        $this->M_method->edit_method($id,$method);
        redirect('admin/Pembayaran');
    }
    function hapus_method() {
        $id = $this->input->post('id');
        $this->M_method->hapus_method($id);
        redirect('admin/Pembayaran');
    }
}