<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testview extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/maptest');
    }

    public function chart()
    {
        $this->load->view('templates/user_view/all_charts');
    }
}
