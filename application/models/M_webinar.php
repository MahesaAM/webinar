<?php
class M_webinar extends CI_Model {

    function get_webinar() {
        $h = $this->db->query("SELECT * FROM tbl_webinar ORDER BY webinar_id DESC ");
        return $h->result_array();
    }
    function get_webinar_active() {
        $date = date('Y-m-d');
        $h = $this->db->query("SELECT * FROM tbl_webinar WHERE webinar_tanggal > '$date' ");
        return $h->result_array();
    }
    function get_webinar_saya($id) {
        $h = $this->db->query("SELECT * FROM tbl_webinar_peserta WHERE peserta_users_id = '$id' ORDER BY peserta_id DESC ");
        return $h->result_array();
    }
    function tot_webinar() {
        $h = $this->db->query("SELECT count(webinar_id) as tot_webinar FROM tbl_webinar ");
        return $h->row_array();
    }
    function buat_webinar($id,$judul,$pamflet,$tanggal,$jam_mulai,$jam_selesai,$deskripsi,$free,$htm,$method,$no_rek,$atas_nama) {
        $h = $this->db->query("INSERT INTO tbl_webinar VALUES ('$id','$judul','$free','$method','$atas_nama','$no_rek','$htm','$pamflet','$tanggal','$jam_mulai','$jam_selesai','$deskripsi',NULL) ");
        return $h;
    }
    function edit_webinar($id,$judul,$pamflet,$tanggal,$jam_mulai,$jam_selesai,$deskripsi,$free,$htm,$method,$atas_nama,$no_rek) {
        $h = $this->db->query("UPDATE tbl_webinar SET webinar_nama = '$judul', webinar_free = '$free',webinar_method = '$method', webinar_atas_nama = '$atas_nama', webinar_no_rek = '$no_rek', webinar_htm = '$htm', webinar_pamflet = '$pamflet', webinar_tanggal = '$tanggal', webinar_jam_mulai = '$jam_mulai', webinar_jam_selesai = '$jam_selesai', webinar_deskripsi = '$deskripsi' WHERE webinar_id = '$id' ");
        return $h;
    }
    function hapus_webinar($id) {
        $h = $this->db->query("DELETE FROM tbl_webinar WHERE webinar_id = '$id' ");
        return $h;
    }
    function daftar_webinar_free($id_users,$id_webinar,$status) {
        $h = $this->db->query("INSERT INTO tbl_webinar_peserta VALUES (NULL,'$id_users','$id_webinar',NULL,'$status',0) ");
        return $h;
    }
    function daftar_webinar_berbayar($id_users,$id_webinar,$bukti,$status) {
        $h = $this->db->query("INSERT INTO tbl_webinar_peserta VALUES (NULL,'$id_users','$id_webinar','$bukti','$status',0) ");
        return $h;
    }
    function absen($id_users,$id_webinar) {
        $h = $this->db->query("UPDATE tbl_webinar_peserta SET peserta_absen = 1 WHERE peserta_users_id = '$id_users' AND peserta_webinar_id = '$id_webinar' ");
        return $h;
    }
    function peserta_webinar($id) {
        $h = $this->db->query("SELECT * FROM tbl_webinar_peserta WHERE peserta_webinar_id = '$id' AND peserta_status = 1 ");
        return $h->result_array();
    }
    function peserta_webinar_pengajuan($id) {
        $h = $this->db->query("SELECT * FROM tbl_webinar_peserta WHERE peserta_webinar_id = '$id' AND peserta_status = 0 ");
        return $h->result_array();
    }
    function simpan_setup($id,$template,$ukuran,$vertikal,$horizontal,$warna,$link) {
        $h1 = $this->db->query("UPDATE tbl_sertif SET sertif_template = '$template', sertif_ukuran = '$ukuran', sertif_warna = '$warna', sertif_vertical = '$vertikal', sertif_horizontal = '$horizontal' WHERE sertif_webinar_id = '$id' ");
        $h2 = $this->db->query("UPDATE tbl_webinar SET webinar_link = '$link' WHERE webinar_id = '$id' ");
        return $h1;
        return $h2;
    }
}