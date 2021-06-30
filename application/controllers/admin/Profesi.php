<?php
class Profesi extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (empty($this->session->admin_email)) {
            redirect('Home');
        }
        $this->load->model('M_profesi');
    }

    function index() {
        $x['title'] = "Profesi";
        $x['profesi'] = $this->M_profesi->get_profesi();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_profesi', $x);
        $this->load->view('admin/template/V_footer');
    } 
    function tambah_profesi() {
        $profesi = $this->input->post('profesi');
        $this->M_profesi->tambah_profesi($profesi);
        redirect('admin/Profesi');
    }
    function edit_profesi() {
        $id = $this->input->post('id');
        $profesi = $this->input->post('profesi');
        $this->M_profesi->edit_profesi($id,$profesi);
        redirect('admin/Profesi');
    }
    function hapus_profesi() {
        $id = $this->input->post('id');
        $this->M_profesi->hapus_profesi($id);
        redirect('admin/Profesi');
    }
}