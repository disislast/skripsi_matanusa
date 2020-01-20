<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Downloadfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function download_base()
    {
        $this->load->model('M_downloaddata');
        $this->load->helper('download');
        /* download file */
        $path = 'assets/geojson/base.geojson';
        force_download($path, NULL);
        /* hapus database */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan sudah diterima</div>');
        redirect('User');
    }

    public function download_datan($id)
    {
        $this->load->model('M_downloaddata');
        $this->load->helper('download');
        /* hapus file */
        $where = array('id' => $id);
        $result = $this->M_downloaddata->ambil_file($where, 'nitrogen_file');
        $url = $result['url'];
        $path = 'assets/geojson/1nitrogen/';
        force_download($path . $url, NULL);
        /* hapus database */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan sudah diterima</div>');
        redirect('User/download_data');
    }

    public function download_datap($id)
    {
        $this->load->model('M_downloaddata');
        $this->load->helper('download');
        /* hapus file */
        $where = array('id' => $id);
        $result = $this->M_downloaddata->ambil_file($where, 'fosfor_file');
        $url = $result['url'];
        $path = 'assets/geojson/2fosfor/';
        force_download($path . $url, NULL);
        /* hapus database */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan sudah diterima</div>');
        redirect('User/download_data');
    }

    public function download_datak($id)
    {
        $this->load->model('M_downloaddata');
        $this->load->helper('download');
        /* hapus file */
        $where = array('id' => $id);
        $result = $this->M_downloaddata->ambil_file($where, 'kalium_file');
        $url = $result['url'];
        $path = 'assets/geojson/3kalium/';
        force_download($path . $url, NULL);
        /* hapus database */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan sudah diterima</div>');
        redirect('User/download_data');
    }

    public function download_datamg($id)
    {
        $this->load->model('M_downloaddata');
        $this->load->helper('download');
        /* hapus file */
        $where = array('id' => $id);
        $result = $this->M_downloaddata->ambil_file($where, 'magnesium_file');
        $url = $result['url'];
        $path = 'assets/geojson/4magnesium/';
        force_download($path . $url, NULL);
        /* hapus database */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan sudah diterima</div>');
        redirect('User/download_data');
    }

    public function download_dataca($id)
    {
        $this->load->model('M_downloaddata');
        $this->load->helper('download');
        /* hapus file */
        $where = array('id' => $id);
        $result = $this->M_downloaddata->ambil_file($where, 'kalsium_file');
        $url = $result['url'];
        $path = 'assets/geojson/5kalsium/';
        force_download($path . $url, NULL);
        /* hapus database */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan sudah diterima</div>');
        redirect('User/download_data');
    }

    public function download_datas($id)
    {
        $this->load->model('M_downloaddata');
        $this->load->helper('download');
        /* hapus file */
        $where = array('id' => $id);
        $result = $this->M_downloaddata->ambil_file($where, 'sulfur_file');
        $url = $result['url'];
        $path = 'assets/geojson/6sulfur/';
        force_download($path . $url, NULL);
        /* hapus database */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan sudah diterima</div>');
        redirect('User/download_data');
    }
}
