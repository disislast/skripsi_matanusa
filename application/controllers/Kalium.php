<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalium extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        } else if ($this->session->userdata('role_id') == 3) {
            redirect('user');
        }
    }

    public function save()
    {
        $config['upload_path'] = 'assets/geojson/3kalium/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $config['file_ext_tolower'] = TRUE;

        $this->form_validation->set_rules('namafile', 'Nama file', 'required');
        $this->form_validation->set_rules('tanggaldata', 'Tanggal data', 'required');
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">form harus disisi dengan lengkap</div>');
            redirect('admin/save_data');
        } else {
            if (!$this->upload->do_upload('fileupload')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">file gagal diupload!</div>');
                redirect('admin/save_data');
            } else {
                $data = [
                    'namafile' => htmlspecialchars($this->input->post('namafile')),
                    'tanggal' => htmlspecialchars($this->input->post('tanggaldata')),
                    'status' => 0,
                    'nutrisi_id' => 3,
                    'url' => $this->upload->data('file_name')
                ];
                $this->db->insert('kalium_file', $data);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data telah ditambahkan!</div>');
                redirect('admin/save_data');
            }
        }
    }

    public function edit()
    {
        $this->load->model('M_datamanager');
        $id = $this->input->post('id');
        $result = $this->M_datamanager->ambil($id, 'kalium_file');

        echo json_encode($result);
    }

    public function aktif($id)
    {
        $this->load->model('M_datamanager');
        /* cari data yang aktif */

        $status = array('status' => 1);
        $ganti = ['status' => 0];
        $this->M_datamanager->aktif($status, $ganti, 'kalium_file');
        /* cari id update */
        $where = array('id' => $id);
        $data = ['status' => 1];
        /* selesai */
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil diaktifkan!</div>');
        $this->M_datamanager->replace($where, $data, 'kalium_file');
        redirect('Admin/save_data');
    }

    public function ubah_data()
    {
        $this->load->model('M_datamanager');
        $this->form_validation->set_rules('namafile', 'Nama file', 'required');
        $this->form_validation->set_rules('tanggaldata', 'Tanggal data', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">form harus disisi dengan lengkap</div>');
            redirect('admin/save_data');
        } else {
            $id = $this->input->post('id');
            $where = array('id' => $id);
            $data = [
                'namafile' => htmlspecialchars($this->input->post('namafile')),
                'tanggal' => htmlspecialchars($this->input->post('tanggaldata')),
                'status' => 0,
                'nutrisi_id' => 3,
            ];

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil diubah!</div>');
            $this->M_datamanager->replace($where, $data, 'kalium_file');
            redirect('Admin/save_data');
        }
    }

    public function delete_data($id)
    {
        $this->load->model('M_datamanager');
        /* hapus file */
        $where = array('id' => $id);
        $result = $this->M_datamanager->ambil_file($where, 'kalium_file');
        $url = $result['url'];
        $path = 'assets/geojson/3kalium/';
        unlink($path . $url);
        /* hapus database */
        $this->M_datamanager->trash($where, 'kalium_file');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil dihapus!</div>');
        redirect('Admin/save_data');
    }
}
