<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');

    }
    public function login() {
       // $this->load->view('templates/header');
        $this->load->view('auth/login');
        //$this->load->view('templates/footer');
    }

    public function register() {
        $this->load->view('templates/header');
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }

    public function proses_register() {
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
        $this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'required|matches[password]');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role')
            ];

            if ($this->Users_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Pendaftaran berhasil, silakan login');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Pendaftaran gagal, silakan coba lagi');
                redirect('auth/register');
            }
        }
    }
}  