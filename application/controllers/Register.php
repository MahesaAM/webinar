<?php
class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_peserta');
        $this->load->model('M_provinsi');
        $this->load->model('M_profesi');
    }

    function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_users.users_email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('profesi', 'Profesi', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password_c]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password_c', 'Password_c', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $x['title'] = "Tambah Peserta";
            $x['provinsi'] = $this->M_provinsi->get_provinsi();
            $x['profesi'] = $this->M_profesi->get_profesi();
            $this->load->view('V_register', $x);
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $profesi = $this->input->post('profesi');
            $instansi = $this->input->post('instansi');
            $provinsi = $this->input->post('provinsi');
            $password = md5($this->input->post('password'));
            $active = 0;

            $token = base64_encode(random_bytes(32));
            $user_token = [
                'token_email' => $email,
                'token_code' => $token,
                'token_date' => time()
            ];
            $this->db->insert('users_token', $user_token);
            $this->M_peserta->tambah_peserta($nama, $email, $phone, $profesi, $instansi, $provinsi, $password, $active);
            $this->kirim_email($token, 'verify');
            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-mg-b" role="alert">
                    Akun Berhasil Dibuat, Silahkan Konfirmasi Melalui Email Anda
                    </div>');
            redirect('Auth');
        }
    }
    function kirim_email($token, $type)
    {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'webinarunisbank@gmail.com',  // Email gmail
            'smtp_pass'   => 'webinarunisbank2021',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // $this->load->library('email', $config);

        // $this->email->from('webinarunisbank@gmail.com', 'Webinar');
        // $this->email->to($this->input->post('email'));

        // if ($type == 'verify') {
        //     $this->email->subject('Verification Account');
        //     $this->email->message('Klik Link Untuk Aktifasi Akun Anda : <a href="' . base_url('Auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token)) . '"> Activate </a> ');
        // }

        // if ($this->email->send()) {
        //     return true;
        // } else {
        //     echo $this->email->print_debugger();
        //     die;
        // }
    }
}
