<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengajuan extends CI_Model
{

    function insert($data)
    {
        return $this->db->insert('pengajuan', $data);
    }

    function get_where($where)
    {
        return $this->db->get_where('pengajuan', $where)->result();
    }

    function get_all()
    {
        $this->db->select('pengajuan.*, akun.nama_lengkap');
        $this->db->from('pengajuan');
        $this->db->join('akun', 'akun.id = pengajuan.pegawai_id');

        return $this->db->get()->result();
    }

    function update_where($data, $where)
    {
        return $this->db->update('pengajuan', $data, $where);
    }

    function delete_where($where)
    {
        return $this->db->delete('pengajuan', $where);
    }
}

/* End of file Model_pengajuan.php */
