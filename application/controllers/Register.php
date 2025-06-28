<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_register');
    }

    public function index()
    {
        $this->form_validation->set_rules('foto', 'foto', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('id_role', 'id_role', 'trim|required');

        if($this->form_validation->run() == false ) {
			$this->load->view('templates/login_header.php');
			$this->load->view('register/index.php');
			$this->load->view('templates/login_footer.php');
    } else {
			$this->Model_register->register();
			$this->session->set_flashdata('flash', 'Didaftarkan!');
			redirect('register');
			}
	}

    public function forgot_password()
    {
            // Validasi form
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/login_header.php');
                $this->load->view('register/forgot_password');
                $this->load->view('templates/login_footer.php');
            }
            else
            {
                // Cari data user berdasarkan email
                $email = $this->input->post('email');
                $user = $this->db->get_where('user', array('email' => $email))->row();
        
                if ($user)
                {
                    // Hash password baru
                    $this->load->library('encryption');
                    
                    $password = $this->input->post('password');
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $hashed_password = substr($hashed_password, 0, 11);
                    $hashed_password = preg_replace('/[^a-zA-Z0-9]/', '', $hashed_password);
        
                    // Simpan password baru ke dalam database
                    $data = array('password' => $hashed_password);
                    $this->db->where('email', $email);
                    $this->db->update('user', $data);
        
                    // Tampilkan pesan sukses
                    $this->session->set_flashdata('success_msg', 'Password berhasil diubah.');
                    $this->session->set_flashdata('success_pw', 'Password Anda : ' . $hashed_password);
                    redirect('register/forgot_password');
                }
                else
                {
                    // Tampilkan pesan error jika email tidak ditemukan
                    $this->session->set_flashdata('error_msg', 'E-mail tidak ditemukan.');
                    redirect('register/forgot_password');
                }
            }
                    
    }
}
?>