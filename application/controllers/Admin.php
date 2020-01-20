<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {   /* simple akses page */
        if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) {
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
            /* simple larangan askses */
        } else {
            $data['heading'] = '404';
            $data['message'] = 'Akses dilarang';
            $this->load->view('errors/html/simple_404', $data);
        }
    }

    public function save_data()
    {
        $data['title'] = 'Ubah data';
        $data['h2'] = 'Data Manager';
        /* load username */
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        /* load model */
        $this->load->model('M_datamanager');
        /* load db for data manager */
        /* $data['nitrogen'] = $this->db->get('nitrogen_file')->result_array(); */
        $data['nitrogen'] = $this->M_datamanager->list_data('nitrogen_file');
        $data['fosfor'] = $this->M_datamanager->list_data('fosfor_file');
        $data['kalium'] = $this->M_datamanager->list_data('kalium_file');
        $data['magnesium'] = $this->M_datamanager->list_data('magnesium_file');
        $data['kalsium'] = $this->M_datamanager->list_data('kalsium_file');
        $data['sulfur'] = $this->M_datamanager->list_data('sulfur_file');
        /* form validation */
        /* $this->form_validation->set_rules('namafile', 'Nama file', 'required');
        $this->form_validation->set_rules('tanggaldata', 'Tanggal data', 'required'); */
        /* method add file */
        /* if ($this->form_validation->run() == false) { */
        /* load view */
        $this->load->view('templates/admin_view/header/headeradmin', $data);
        $this->load->view('templates/admin_view/sidebar/sidebaradmin', $data);
        $this->load->view('templates/admin_view/topbar/topbaradmin', $data);
        $this->load->view('templates/admin_view/main/management', $data);
        $this->load->view('templates/admin_view/modals/nitrogen_modal', $data);
        $this->load->view('templates/admin_view/modals/fosfor_modal', $data);
        $this->load->view('templates/admin_view/modals/kalium_modal', $data);
        $this->load->view('templates/admin_view/modals/magnesium_modal', $data);
        $this->load->view('templates/admin_view/modals/kalsium_modal', $data);
        $this->load->view('templates/admin_view/modals/sulfur_modal', $data);
        $this->load->view('templates/admin_view/footer/footeradmin_manager');
        /* } else { */
        /* $config['upload_path'] = 'assets/geojson/';
            $config['allowed_types'] = '*';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $config['file_ext_tolower'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('fileupload')) { */
        /* $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">file gagal diupload!</div>');
                redirect('admin/save_data');
            } else {
                $data = [
                    'namafile' => $this->input->post('namafile'),
                    'tanggal' => $this->input->post('tanggaldata'),
                    'status' => 0,
                    'nutrisi_id' => 1,
                    'url' => $this->upload->data('file_name')
                ];
                $this->db->insert('nitrogen_file', $data); */

        /* $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data telah ditambahkan!</div>');
            redirect('admin/save_data'); */
        /* } */
    }
}
