<?php
class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (empty($this->session->admin_email)) {
            redirect('Home');
        }
        $this->load->model('M_webinar');
        $this->load->model('M_peserta');
    }

    function index() {
        $x['title'] = "Dashboard";
        $x['p'] = $this->M_peserta->tot_peserta();
        $x['w'] = $this->M_webinar->tot_webinar();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_dashboard', $x);
        $this->load->view('admin/template/V_footer');
    }
}