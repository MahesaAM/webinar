<?php
class M_method extends CI_Model {

    function get_method() {
        $h = $this->db->query("SELECT * FROM tbl_method ");
        return $h->result_array();
    }
    function tambah_method($method) {
        $h = $this->db->query("INSERT INTO tbl_method VALUES (NULL,'$method') ");
        return $h;
    }
    function edit_method($id,$method) {
        $h = $this->db->query("UPDATE tbl_method SET method_nama = '$method' WHERE method_id = '$id' ");
        return $h;
    }
    function hapus_method($id) {
        $h = $this->db->query("DELETE FROM tbl_method WHERE method_id = '$id' ");
        return $h;
    }
}