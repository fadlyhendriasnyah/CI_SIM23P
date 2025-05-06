<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }

    // Menampilkan halaman login
    public function login() {
        $this->load->view('auth/login');
    }

    // Menampilkan halaman registrasi
    public function register() {
        $this->load->view('templates/header');
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }

    // Proses registrasi
    public function proses_register() {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('konfirmasi', 'Konfirmasi Password', 'required|matches[password]');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form registrasi dengan pesan error
            $this->load->view('templates/header');
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        } else {
            // Menyimpan data user baru
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role')
            ];

            // Menyimpan data user ke database
            if ($this->Users_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Pendaftaran berhasil, silakan login');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Pendaftaran gagal, silakan coba lagi');
                redirect('auth/register');
            }
        }
    }

    // Proses login
    public function proses_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Memeriksa apakah user ada dan password valid
        $user = $this->Users_model->check_user($username, $password);

        if ($user) {
            // Jika login berhasil, buat session
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username,
                'role' => $user->role,
                'logged_in' => TRUE
            ]);
            // Redirect berdasarkan role
            $this->redirect_by_role($user->role);
        } else {
            // Jika login gagal
            $this->session->set_flashdata('error', 'Username dan Password salah');
            redirect('auth/login');
        }
    }

    // Redirect berdasarkan role
    private function redirect_by_role($role) {
        switch ($role) {
            case 'admin':
                redirect('dashboard');  // Arahkan ke dashboard admin
                break;
            case 'user':
                redirect('dashboard_user');  // Arahkan ke dashboard user
                break;
            default:
                redirect('auth/login');  // Jika role tidak sesuai, kembali ke login
        }
    }

    // Logout
    public function logout() {
        $this->session->sess_destroy();  // Hapus session
        redirect('auth/login');  // Redirect ke halaman login
    }
}
