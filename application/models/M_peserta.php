<?php
class M_peserta extends CI_Model {

    function get_peserta() {
        $h = $this->db->query("SELECT * FROM tbl_users ");
        return $h->result_array();
    }
    function tambah_peserta($nama,$email,$phone,$profesi,$instansi,$provinsi,$password,$active) {
        $h = $this->db->query("INSERT INTO tbl_users VALUES (NULL,'$nama','$email','$phone','$profesi','$instansi','$provinsi','$password','$active') ");
        return $h;
    }
    function tot_peserta() {
        $h = $this->db->query("SELECT count(users_id) as tot_users FROM tbl_users ");
        return $h->row_array();
    }
}