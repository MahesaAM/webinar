<?php
class M_cp extends CI_Model {

    function get_cp($id) {
        $h = $this->db->query("SELECT * FROM tbl_cp WHERE cp_webinar_id = '$id' ");
        return $h->result_array();
    }
    function tambah_cp($id,$nama,$nomor) {
        $h = $this->db->query("INSERT INTO tbl_cp VALUES (NULL,'$id','$nama','$nomor') ");
        return $h;
    }
    function edit_cp($id,$nama,$nomor) {
        $h = $this->db->query("UPDATE tbl_cp SET cp_nama = '$nama', cp_number = '$nomor' WHERE cp_id = '$id' ");
        return $h;
    }
    function hapus_cp($id) {
        $h = $this->db->query("DELETE FROM tbl_cp WHERE cp_id = '$id' ");
        return $h;
    }
    function hapus_cp_w($id) {
        $h = $this->db->query("DELETE FROM tbl_cp WHERE cp_webinar_id = '$id' ");
        return $h;
    }
}