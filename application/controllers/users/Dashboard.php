<?php
class Dashboard extends CI_Controller {
    function index() {
        $x['title'] = "Dashboard";
        $id = $this->session->users_id;
        $x['wbs'] = $this->db->query("SELECT count(peserta_users_id) AS tot_webinar FROM tbl_webinar_peserta WHERE peserta_users_id = '$id'  ")->row_array();
        $this->load->view('users/template/V_header', $x);
        $this->load->view('users/V_dashboard', $x);
        $this->load->view('users/template/V_footer');
    }
}