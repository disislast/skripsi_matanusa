<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opentable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_getdatafile');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Tabel Nitrogen';
            $data['map'] = $this->M_getdatafile->tampilkan('nitrogen_file');
            $this->load->view('all_table', $data);
        } else {
            $data['title'] = 'Tabel Nitrogen';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('nitrogen_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_tabel', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/tabel', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_tabel', $data);
        }
    }

    public function fosfor()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Tabel Fosor';
            $data['map'] = $this->M_getdatafile->tampilkan('fosfor_file');
            $this->load->view('all_table', $data);
        } else {
            $data['title'] = 'Tabel Fosor';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('fosfor_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_tabel', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/tabel', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_tabel', $data);
        }
    }

    public function kalium()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Tabel Kalium';
            $data['map'] = $this->M_getdatafile->tampilkan('kalium_file');
            $this->load->view('all_table', $data);
        } else {
            $data['title'] = 'Tabel Kalium';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('kalium_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_tabel', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/tabel', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_tabel', $data);
        }
    }

    public function magnesium()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Tabel Magnesium';
            $data['map'] = $this->M_getdatafile->tampilkan('magnesium_file');
            $this->load->view('all_table', $data);
        } else {
            $data['title'] = 'Tabel Magnesium';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('magnesium_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_tabel', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/tabel', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_tabel', $data);
        }
    }

    public function kalsium()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Tabel Kalsium';
            $data['map'] = $this->M_getdatafile->tampilkan('kalsium_file');
            $this->load->view('all_table', $data);
        } else {
            $data['title'] = 'Tabel Kalsium';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('kalsium_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_tabel', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/tabel', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_tabel', $data);
        }
    }

    public function sulfur()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Tabel sulfur';
            $data['map'] = $this->M_getdatafile->tampilkan('sulfur_file');
            $this->load->view('all_table', $data);
        } else {
            $data['title'] = 'Tabel sulfur';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('sulfur_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_tabel', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/tabel', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_tabel', $data);
        }
    }
}
