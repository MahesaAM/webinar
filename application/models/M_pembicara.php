<?php
class M_pembicara extends CI_Model {
    
    function get_pembicara($id) {
        $h = $this->db->query("SELECT * FROM tbl_pembicara WHERE pembicara_webinar_id = '$id' ");
        return $h->result_array();
    }
    function get_pembicara_active() {
        $date = date('Y-m-d');
        $h = $this->db->query("SELECT * FROM tbl_pembicara JOIN tbl_webinar ON tbl_pembicara.pembicara_webinar_id = tbl_webinar.webinar_id WHERE tbl_webinar.webinar_tanggal > '$date' ");
        return $h->result_array();
    }
    function tambah_pembicara($id,$nama,$dari,$foto) {
        $h = $this->db->query("INSERT INTO tbl_pembicara VALUES (NULL,'$id','$nama','$dari','$foto') ");
        return $h;
    }
    function edit_pembicara($id,$id_webinar,$nama,$dari,$foto) {
        $h = $this->db->query("UPDATE tbl_pembicara SET pembicara_nama = '$nama', pembicara_dari = '$dari', pembicara_foto = '$foto' WHERE pembicara_id = '$id' AND pembicara_webinar_id = '$id_webinar' ");
        return $h;
    }
    function hapus_pembicara($id) {
        $h = $this->db->query("DELETE FROM tbl_pembicara WHERE pembicara_id = '$id' ");
        return $h;
    }
    function hapus_pembicara_w($id) {
        $h = $this->db->query("DELETE FROM tbl_pembicara WHERE pembicara_webinar_id = '$id' ");
        return $h;
    }
}