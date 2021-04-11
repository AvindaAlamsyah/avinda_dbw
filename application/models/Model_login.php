<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{

    function get_where($where)
    {
        return $this->db->get_where('akun', $where)->row_array();
    }
}

/* End of file Model_login.php */
