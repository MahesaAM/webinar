<?php
class M_profesi extends CI_Model {

    function get_profesi() {
        $h = $this->db->query("SELECT * FROM tbl_profesi");
        return $h->result_array();
    }
    function tambah_profesi($profesi) {
        $h = $this->db->query("INSERT INTO tbl_profesi VALUES (NULL,'$profesi') ");
        return $h;
    }
    function edit_profesi($id,$profesi){
        $h = $this->db->query("UPDATE tbl_profesi SET profesi_nama = '$profesi' WHERE profesi_id = '$id' ");
        return $h;
    }
    function hapus_profesi($id) {
        $h = $this->db->query("DELETE FROM tbl_profesi WHERE profesi_id = '$id'");
        return $h;
    }
}