<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_downloaddata extends CI_Model
{
    function list_data($table)
    {
        return $this->db->get($table)->result_array();
    }

    function ambil_file($where, $table)
    {
        $this->db->where($where);
        return $this->db->get($table)->row_array();
    }
}
