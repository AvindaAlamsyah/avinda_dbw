<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pengajuan');
    }


    public function index()
    {
        if ($this->session->userdata('status_login')) {
            if ($this->session->userdata('level') == 1) {
                //tampilan pegawai
                $this->load->view('pengajuan');
            } else {
                //tampilan atasan
                redirect("cuti_pegawai", "refresh");
            }
        } else {
            redirect("login", "refresh");
        }
    }

    public function ambil_sesuai()
    {
        $where = array(
            "pegawai_id" => $this->session->userdata('id')
        );

        $data = array(
            "data" => $this->model_pengajuan->get_where($where)
        );
        echo json_encode($data);
    }

    public function tambah_data()
    {
        $data_pengajuan = array(
            "pegawai_id" => $this->session->userdata('id'),
            "tgl_mulai_cuti" => $this->input->post('tambah_mulai'),
            "tgl_selesai_cuti" => $this->input->post('tambah_selesai'),
            "status" => "diproses",
            "keterangan" => $this->input->post('tambah_keterangan')
        );

        $data = array(
            "data" => $this->model_pengajuan->insert($data_pengajuan)
        );
        echo json_encode($data);
    }
}

/* End of file Pengajuan.php */
