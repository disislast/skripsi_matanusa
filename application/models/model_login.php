<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_model
{

    public function getlogin($username, $password)
    {
        $this->db->select('user_id, username, password, role_id');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result();
        $count = count($result);
        if ($count == 1) {
            return $result;
        } else {
            $this->session->set_flashdata('info', '<center>Maaf Username atau Password Salah</center>');
            redirect('auth');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
//salah
