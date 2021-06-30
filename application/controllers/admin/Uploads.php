<?php

class Uploads extends CI_Controller
{
    //Load libraries in Constructor.
    public function __construct()
    {
        parent::__construct();
    }
    // index method
    public function index()
    {
        $x['title'] = "Upload Materi";
        $id = $_GET['id'];
        $x['video'] = $this->db->query("SELECT * FROM tbl_materi WHERE materi_webinar_id = '$id' AND materi_jenis = 1 ")->result_array();
        $x['materi'] = $this->db->query("SELECT * FROM tbl_materi WHERE materi_webinar_id = '$id' AND materi_jenis = 2 ")->result_array();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_materi', $x);
        $this->load->view('admin/template/V_footer');
    }
    // Upload file/image method
    public function upl()
    {
        $this->load->library('upload');
        $json = array();
        $path = 'video/';
        // Define file rules
        $initialize = $this->upload->initialize(array(
            "upload_path" => $path,
            "allowed_types" => "mp4|3gp|mkv",
            "remove_spaces" => FALSE
        ));
        if (!$this->upload->do_upload('upl_file')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $imagename = $data['file_name'];
            $id = $_POST['id'];
            $this->db->insert('tbl_materi', ['materi_webinar_id' => $id, 'materi_nama' => $imagename, 'materi_jenis' => 1]);
            $id = $this->db->insert_id();
            $json = 'success';
        }
        header('Content-Type: application/json');
        $res = [$json, $imagename, $id];
        echo json_encode($res);
    }
    public function doc()
    {
        $this->load->library('upload');
        $json = array();
        $path = 'materi/';
        // Define file rules
        $initialize = $this->upload->initialize(array(
            "upload_path" => $path,
            "allowed_types" => "pdf|doc|docx",
            "remove_spaces" => FALSE
        ));
        if (!$this->upload->do_upload('document')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $imagename = $data['file_name'];
            $pecah = explode(".", $imagename);
            $ekstensi = $pecah[1];
            $id = $_POST['id'];
            $this->db->insert('tbl_materi', ['materi_webinar_id' => $id, 'materi_nama' => $imagename, 'materi_jenis' => 2]);
            $json = 'success';
            if ($ekstensi == 'pdf') {
                $ek = '<span class="fa fa-home fa-2x"></span>';
            } else if ($ekstensi == 'doc') {
                $ek = '<span class="fa fa-home fa-2x"></span>';
            } else if ($ekstensi == 'docx') {
                $ek = '<span class="fa fa-home fa-2x"></span>';
            }
        }
        header('Content-Type: application/json');
        $res = [$json, $imagename, $ek];
        echo json_encode($res);
    }
    function hapus_materi()
    {
        $id = $_POST['id'];
        $this->db->delete('tbl_materi', ['materi_id' => $id]);
    }
}
