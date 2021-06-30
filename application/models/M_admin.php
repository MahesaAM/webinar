<?php
class M_admin extends CI_Model {
    
    function get_admin() {
        $h = $this->db->query("SELECT * FROM tbl_admin ");
        return $h->result_array();
    }
    function tambah_admin($nama,$email,$password) {
        $h = $this->db->query("INSERT INTO tbl_admin VALUES (NULL,'$nama','$email','$password') ");
        return $h;
    }
    function hapus_admin($id) {
        $h = $this->db->query("DELETE FROM tbl_admin WHERE admin_id = '$id' ");
        return $h;
    }
}