<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cuti_pegawai extends CI_Controller
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
                redirect("pengajuan", "refresh");
            } else {
                //tampilan atasan
                $this->load->view('keputusan_atasan');
            }
        } else {
            redirect("login", "refresh");
        }
    }

    public function ambil_semua()
    {
        $data = array(
            "data" => $this->model_pengajuan->get_all()
        );

        echo json_encode($data);
    }

    public function simpan_edit()
    {
        $data = $this->model_pengajuan->update_where(array("status" => $this->input->post('edit_status')), array("id" => $this->input->post('edit_id')));

        echo json_encode($data);
    }

    public function hapus()
    {
        $data = $this->model_pengajuan->delete_where(array("id" => $this->input->post('hapus_id')));

        echo json_encode($data);
    }
}

/* End of file Cuti_pegawai.php */
