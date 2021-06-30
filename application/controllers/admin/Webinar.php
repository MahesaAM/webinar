<?php
class Webinar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (empty($this->session->admin_email)) {
            redirect('Home');
        }
        $this->load->model('M_webinar');
        $this->load->model('M_pembicara');
        $this->load->model('M_method');
        $this->load->model('M_cp');
    }

    function index()
    {
        $x['title'] = "Webinar";
        $x['webinar'] = $this->M_webinar->get_webinar();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_webinar', $x);
        $this->load->view('admin/template/V_footer');
    }
    function v_tambah_webinar()
    {
        $x['title'] = "Tambah Webinar";
        $x['method'] = $this->M_method->get_method();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_tambah_webinar', $x);
        $this->load->view('admin/template/V_footer');
    }
    function v_edit_webinar()
    {
        $x['title'] = "Edit Webinar";
        $id = $this->uri->segment(4);
        $x['method'] = $this->M_method->get_method();
        $x['w'] = $this->db->get_where('tbl_webinar', ['webinar_id' => $id])->row_array();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_edit_webinar', $x);
        $this->load->view('admin/template/V_footer');
    }
    function buat_webinar()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $tanggal = $this->input->post('tanggal');
        $jam_mulai = $this->input->post('jam_mulai');
        $jam_selesai = $this->input->post('jam_selesai');
        $deskripsi = $this->input->post('deskripsi');
        if (!empty($this->input->post('free'))) {
            $free = 1;
        } else {
            $free = 0;
        }
        $method = $this->input->post('method');
        $atas_nama = $this->input->post('atas_nama');
        $no_rek = $this->input->post('no_rek');
        $htm = $this->input->post('htm');

        $config['upload_path']          = './pamflet/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 0;
        $config['remove_spaces']        = FALSE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pamflet')) {
            $this->upload->data();
        }

        $this->M_webinar->buat_webinar($id, $judul, $_FILES['pamflet']['name'], $tanggal, $jam_mulai, $jam_selesai, $deskripsi, $free, $htm, $method, $no_rek, $atas_nama);
        $this->db->query("INSERT INTO tbl_sertif VALUES (NULL,'$id',NULL,200,'#161515',50,50,0) ");
        redirect('admin/Webinar');
    }
    function edit_webinar()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $tanggal = $this->input->post('tanggal');
        $jam_mulai = $this->input->post('jam_mulai');
        $jam_selesai = $this->input->post('jam_selesai');
        $deskripsi = $this->input->post('deskripsi');
        if (!empty($this->input->post('free'))) {
            $free = 1;
        } else {
            $free = 0;
        }
        $method = $this->input->post('method');
        $atas_nama = $this->input->post('atas_nama');
        $no_rek = $this->input->post('no_rek');
        $htm = $this->input->post('htm');

        $config['upload_path']          = './pamflet/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 0;
        $config['remove_spaces']        = FALSE;
        $this->load->library('upload', $config);

        if (!empty($_FILES['pamflet']['name'])) {
            $pamflet = $_FILES['pamflet']['name'];
            if ($this->upload->do_upload('pamflet')) {
                $this->upload->data();
            }
        } else {
            $pamflet = $this->input->post('pamflet_lama');
        }
        $this->M_webinar->edit_webinar($id, $judul, $pamflet, $tanggal, $jam_mulai, $jam_selesai, $deskripsi, $free, $htm, $method, $atas_nama, $no_rek);
        redirect('admin/Webinar/v_edit_webinar/' . $id);
    }
    function hapus_webinar()
    {
        $id = $this->input->post('id');
        $this->M_webinar->hapus_webinar($id);
        $this->db->query("DELETE FROM tbl_sertif WHERE sertif_webinar_id = '$id' ");
        $this->M_pembicara->hapus_pembicara_w($id);
        $this->M_cp->hapus_cp_w($id);
        redirect('admin/Webinar');
    }
    function v_pembicara()
    {
        $id_webinar = $this->uri->segment(4);
        $x['title'] = "Pembicara";
        $x['pembicara'] = $this->M_pembicara->get_pembicara($id_webinar);
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_pembicara', $x);
        $this->load->view('admin/template/V_footer');
    }
    function tambah_pembicara()
    {
        $id_webinar = $this->input->post('id_webinar');
        $nama = $this->input->post('nama');
        $dari = $this->input->post('dari');
        $config['upload_path']          = './pembicara/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 0;
        $config['remove_spaces']        = FALSE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $this->upload->data();
        }
        $this->M_pembicara->tambah_pembicara($id_webinar, $nama, $dari, $_FILES['foto']['name']);
        redirect('admin/Webinar/v_pembicara/' . $id_webinar);
    }
    function edit_pembicara()
    {
        $id_webinar = $this->input->post('id_webinar');
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $dari = $this->input->post('dari');
        $config['upload_path']          = './pembicara/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 0;
        $config['remove_spaces']        = FALSE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['foto']['name'])) {
            $foto = $_FILES['foto']['name'];
            if ($this->upload->do_upload('foto')) {
                $this->upload->data();
            }
        } else {
            $foto = $this->input->post('foto_lama');
        }
        $this->M_pembicara->edit_pembicara($id, $id_webinar, $nama, $dari, $foto);
        redirect('admin/Webinar/v_pembicara/' . $id_webinar);
    }
    function hapus_pembicara()
    {
        $id_webinar = $this->input->post('id_webinar');
        $id = $this->input->post('id');
        $this->M_pembicara->hapus_pembicara($id);
        redirect('admin/Webinar/v_pembicara/' . $id_webinar);
    }
    function v_cp()
    {
        $x['title'] = "Contact Person";
        $id = $this->uri->segment(4);
        $x['cp'] = $this->M_cp->get_cp($id);
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_cp', $x);
        $this->load->view('admin/template/V_footer');
    }
    function tambah_cp()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nomor = $this->input->post('nomor');

        $this->M_cp->tambah_cp($id, $nama, $nomor);
        redirect('admin/Webinar/v_cp/' . $id);
    }
    function edit_cp()
    {
        $id = $this->input->post('id');
        $id_cp = $this->input->post('id_cp');
        $nama = $this->input->post('nama');
        $nomor = $this->input->post('nomor');

        $this->M_cp->edit_cp($id_cp, $nama, $nomor);
        redirect('admin/Webinar/v_cp/' . $id);
    }
    function hapus_cp()
    {
        $id = $this->input->post('id');
        $id_cp = $this->input->post('id_cp');

        $this->M_cp->hapus_cp($id_cp);
        redirect('admin/Webinar/v_cp/' . $id);
    }
    function peserta()
    {
        $x['title'] = "Peserta Webinar";
        $id = $this->uri->segment(4);
        $x['w'] = $this->db->get_where('tbl_webinar', ['webinar_id' => $id])->row_array();
        $x['peserta_pengajuan'] = $this->M_webinar->peserta_webinar_pengajuan($id);
        $x['peserta'] = $this->M_webinar->peserta_webinar($id);
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_peserta_webinar', $x);
        $this->load->view('admin/template/V_footer');
    }
    function terima()
    {
        $id = $this->input->post('id');
        $id_webinar = $this->input->post('id_webinar');
        $this->db->query("UPDATE tbl_webinar_peserta SET peserta_status = 1 WHERE peserta_id = '$id' ");
        redirect('admin/Webinar/peserta/' . $id_webinar);
    }
    function tolak()
    {
        $id = $this->input->post('id');
        $id_webinar = $this->input->post('id_webinar');
        $this->db->query("UPDATE tbl_webinar_peserta SET peserta_status = 4 WHERE peserta_id = '$id' ");
        redirect('admin/Webinar/peserta/' . $id_webinar);
    }
    function setup()
    {
        $x['title'] = "Setup";
        $id = $this->uri->segment(4);
        $x['link'] = $this->db->get_where('tbl_webinar', ['webinar_id' => $id])->row_array();
        $x['sertif'] = $this->db->get_where('tbl_sertif', ['sertif_webinar_id' => $id])->row_array();
        $this->load->view('admin/template/V_header', $x);
        $this->load->view('admin/V_setup', $x);
        $this->load->view('admin/template/V_footer');
    }
    function simpan_setup()
    {
        $id = $this->input->post('id');
        $ukuran = $this->input->post('ukuran');
        $sertif = $this->input->post('sertif');
        $vertikal = $this->input->post('vertikal');
        $horizontal = $this->input->post('horizontal');
        $warna = $this->input->post('warna');
        $link = $this->input->post('link');
        $config['upload_path']          = './sertif/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 0;
        $config['remove_spaces']        = FALSE;
        $this->load->library('upload', $config);
        if (empty($sertif)) {
            if ($this->upload->do_upload('sertif')) {
                $this->upload->data();
                $template = $_FILES['sertif']['name'];
            }
        } else {
            $template = $sertif;
        }
        $this->M_webinar->simpan_setup($id, $template, $ukuran, $vertikal, $horizontal, $warna, $link);
        redirect('admin/Webinar/setup/' . $id);
    }
}
