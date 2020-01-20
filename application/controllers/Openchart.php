<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Openchart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('M_getdatafile');
    }

    public function index()
    {
        $data['title'] = 'Bagan Kondisi';
        $data['h2'] = 'Bagan kondisi lahan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['nitrogen'] = $this->M_getdatafile->tampilkan('nitrogen_file');
        $data['fosfor'] = $this->M_getdatafile->tampilkan('fosfor_file');
        $data['kalium'] = $this->M_getdatafile->tampilkan('kalium_file');
        $data['magnesium'] = $this->M_getdatafile->tampilkan('magnesium_file');
        $data['kalsium'] = $this->M_getdatafile->tampilkan('kalsium_file');
        $data['sulfur'] = $this->M_getdatafile->tampilkan('sulfur_file');
        /* load view */
        $this->load->view('templates/admin_view/header/headeradmin', $data);
        $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
        $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
        $this->load->view('templates/admin_view/main/chart', $data);
        $this->load->view('templates/admin_view/footer/footeradmin_chart');
    }
}
