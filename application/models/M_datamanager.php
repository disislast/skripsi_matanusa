<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_datamanager extends CI_Model
{
    function list_data($table)
    {
        return $this->db->get($table)->result_array();
    }

    function ambil($id, $table)
    {
        $this->db->where('id', $id);
        return $this->db->get($table)->row_array();
    }

    function aktif($status, $ganti, $table)
    {
        $this->db->where($status);
        $this->db->update($table, $ganti);
    }

    function replace($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function trash($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function ambil_file($where, $table)
    {
        $this->db->where($where);
        return $this->db->get($table)->row_array();
    }

    function ambil_peta($where, $table)
    {
        $this->db->where($where);
        return $this->db->get($table)->row_array();
    }
}
