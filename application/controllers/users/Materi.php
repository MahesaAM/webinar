<?php
class Materi extends CI_Controller
{

    function index()
    {
        $x['title'] = "Materi";
        $id = $_GET['id'];
        $x['video'] = $this->db->query("SELECT * FROM tbl_materi WHERE materi_webinar_id = '$id' AND materi_jenis = 1 ")->result_array();
        $x['materi'] = $this->db->query("SELECT * FROM tbl_materi WHERE materi_webinar_id = '$id' AND materi_jenis = 2 ")->result_array();
        $this->load->view('users/template/V_header', $x);
        $this->load->view('users/V_materi', $x);
        $this->load->view('users/template/V_footer', $x);
    }
}
