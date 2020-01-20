<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_login');
        $this->load->library('session');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric', [
            'required' => 'username tidak boleh kosong',
            'alpha_numeric' => 'username hanya boleh huruf dan angka'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'password tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('login', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //user terdaftar
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'user_id' => $user['user_id'],
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                //cek role
                if ($user['role_id'] == 1) {
                    redirect('superadmin');
                } elseif ($user['role_id'] == 2) {
                    redirect('admin');
                } elseif ($user['role_id'] == 3) {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username atau password salah</div>');
                redirect('auth');
            }

            //tidak terdaftar
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|is_unique[user.username]', [
            'is_unique' => 'username sudah pernah dibuat!',
            'required' => 'username tidak boleh kosong',
            'alpha_numeric' => 'username hanya boleh huruf dan angka'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|max_length[12]|matches[password2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'password terlalu pendek!',
            'max_length' => 'password hanya boleh 12 charakter',
            'required' => 'password tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_view/registration');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3
            ];
            //upload database
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah berhasil dibuat</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Username anda berhasil logout</div>');
        redirect('auth');
    }
}
