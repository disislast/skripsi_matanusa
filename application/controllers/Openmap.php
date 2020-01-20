<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Openmap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_getdatafile');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Peta Nitrogen';
            $data['map'] = $this->M_getdatafile->tampilkan('nitrogen_file');
            $this->load->view('all_map', $data);
        } else {
            $data['title'] = 'Peta Nitrogen';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('nitrogen_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_map', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/map', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_map', $data);
        }
    }

    public function fosfor()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Peta Fosfor';
            $data['map'] = $this->M_getdatafile->tampilkan('fosfor_file');
            $this->load->view('all_map', $data);
        } else {
            $data['title'] = 'Peta Fosfor';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('fosfor_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_map', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/map', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_map', $data);
        }
    }

    public function kalium()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Peta Kalium';
            $data['map'] = $this->M_getdatafile->tampilkan('kalium_file');
            $this->load->view('all_map', $data);
        } else {
            $data['title'] = 'Peta Kalium';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('kalium_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_map', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/map', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_map', $data);
        }
    }

    public function magnesium()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Peta Magnesium';
            $data['map'] = $this->M_getdatafile->tampilkan('magnesium_file');
            $this->load->view('all_map', $data);
        } else {
            $data['title'] = 'Peta Magnesium';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('magnesium_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_map', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/map', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_map', $data);
        }
    }

    public function kalsium()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Peta Kalsium';
            $data['map'] = $this->M_getdatafile->tampilkan('kalsium_file');
            $this->load->view('all_map', $data);
        } else {
            $data['title'] = 'Peta Kalsium';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('kalsium_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_map', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/map', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_map', $data);
        }
    }

    public function sulfur()
    {
        if (!$this->session->userdata('username')) {
            $data['title'] = 'Peta Sulfur';
            $data['map'] = $this->M_getdatafile->tampilkan('sulfur_file');
            $this->load->view('all_map', $data);
        } else {
            $data['title'] = 'Peta Sulfur';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['map'] = $this->M_getdatafile->tampilkan('sulfur_file');
            /* load view */
            $this->load->view('templates/admin_view/header/headeradmin_map', $data);
            $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
            $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
            $this->load->view('templates/admin_view/main/map', $data);
            $this->load->view('templates/admin_view/footer/footeradmin_map', $data);
        }
    }
}
