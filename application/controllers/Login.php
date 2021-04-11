<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    private $pesan = array(
        "isi" => "",
        "status" => 0
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }


    public function index()
    {
        if ($this->session->userdata('status_login')) {
            if ($this->session->userdata('level') == 1) {
                //tampilan pegawai
                redirect("pengajuan", "refresh");
            } else {
                //tampilan atasan
                redirect("cuti_pegawai", "refresh");
            }
        } else {
            $this->load->view('login', $this->pesan);
        }
    }

    public function verify()
    {
        $data_login = array(
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password')
        );

        if ($data_login['username'] == null || $data_login['password'] == null) {
            $this->pesan['status'] = 1;
            $this->pesan['isi'] = "Harap isi kolom Username dan Password";
        } else {

            $data_akun = $this->model_login->get_where(array("username" => $data_login['username']));

            if ($data_akun != null) {
                $this->pesan['status'] = 1;
                $this->pesan['isi'] = "Berhasil";
                $data_session = array(
                    "id" => $data_akun['id'],
                    "username" => $data_akun['username'],
                    "nama" => $data_akun['nama_lengkap'],
                    "level" => $data_akun['level'],
                    "status_login" => true
                );
                $this->session->set_userdata($data_session);

                redirect('pengajuan', 'refresh');
            } else {
                $this->pesan['status'] = 1;
                $this->pesan['isi'] = "Username atau Password salah";
            }
        }

        $this->load->view('login', $this->pesan);
    }

    public function logout()
    {

        $this->session->sess_destroy();

        redirect("login", "refresh");
    }
}

/* End of file Login.php */
