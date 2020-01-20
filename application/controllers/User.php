<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['title'] = 'Panduan';
        $data['h2'] = 'Panduan Penggunaan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        /* load view */
        $this->load->view('templates/user_view/headeruser', $data);
        $this->load->view('templates/user_view/sidebar/sidebaruser', $data);
        $this->load->view('templates/user_view/topbaruser', $data);
        $this->load->view('templates/admin_view/main/index', $data);
        $this->load->view('templates/user_view/footeruser');
    }

    public function download_data()
    {
        $data['title'] = 'Download data';
        $data['h2'] = 'Download dataset';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        /* load Model */
        $this->load->model('M_downloaddata');
        /* Load Data From Model */
        $data['nitrogen'] = $this->M_downloaddata->list_data('nitrogen_file');
        $data['fosfor'] = $this->M_downloaddata->list_data('fosfor_file');
        $data['kalium'] = $this->M_downloaddata->list_data('kalium_file');
        $data['magnesium'] = $this->M_downloaddata->list_data('magnesium_file');
        $data['kalsium'] = $this->M_downloaddata->list_data('kalsium_file');
        $data['sulfur'] = $this->M_downloaddata->list_data('sulfur_file');
        /* load view */
        $this->load->view('templates/admin_view/header/headeradmin', $data);
        $this->load->view('templates/user_view/sidebar/sidebaruser', $data);
        $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
        $this->load->view('templates/user_view/main/download_data', $data);
        $this->load->view('templates/user_view/footer/footeruser_download', $data);
    }
}
