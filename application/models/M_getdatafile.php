<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_getdatafile extends CI_Model
{
    function list_data($table)
    {
        return $this->db->get($table)->result_array();
    }

    function tampilkan($table)
    {
        $queryfile = "SELECT *
                    FROM `nutrisi` JOIN $table
                    ON `nutrisi`.`id` = $table.`nutrisi_id`
                    WHERE $table.`status` = 1
                    LIMIT 1
                    ";
        return $this->db->query($queryfile)->row_array();
        /* $this->db->where('status', 1);
        return $this->db->get($table)->row_array(); */
    }
}
