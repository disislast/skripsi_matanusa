<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller
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
        $data['title'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        /* echo 'selamat datang ' . $data['user']['username']; */
        $this->load->view('templates/admin_view/headeradmin', $data);
        $this->load->view('templates/admin_view/sidebaradmin', $data);
        $this->load->view('templates/admin_view/topbaradmin', $data);
        $this->load->view('templates/admin_view/index', $data);
        $this->load->view('templates/admin_view/footeradmin');
    }
}
