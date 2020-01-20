<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorialweb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        /* parameter from model */
        $data['title'] = 'Panduan';
        $data['h2'] = 'Panduan Penggunaan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        /* load view */
        $this->load->view('templates/admin_view/header/headeradmin', $data);
        $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
        $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
        $this->load->view('templates/admin_view/main/index', $data);
        $this->load->view('templates/admin_view/footer/footeradmin');
    }
}
