<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Matakuliah_model');
    }

    public function index() {
        $data['matakuliah'] = $this->Matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('matakuliah/form_matakuliah');
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data = array(
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'nama_matakuliah' => $this->input->post('nama_matakuliah'),
            'sks' => $this->input->post('sks'),
            'semester' => $this->input->post('semester'),
            'jenis' => $this->input->post('jenis'),
            'prodi' => $this->input->post('prodi')
        );

        $result = $this->Matakuliah_model->insert_matakuliah($data);

        if ($result) {
            $this->session->set_flashdata('success', 'Mata kuliah berhasil disimpan');
            redirect('matakuliah');
        } else {
            $this->session->set_flashdata('error', 'Mata kuliah gagal disimpan');
            redirect('matakuliah');
        }
    }

    public function hapus($id) {
        $this->Matakuliah_model->delete_matakuliah($id);
        redirect('matakuliah');
    }

    public function edit($id) {
        $data['matakuliah'] = $this->Matakuliah_model->get_matakuliah_by_id($id);
        $this->load->view('templates/header');
        $this->load->view('matakuliah/edit_matakuliah', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $this->form_validation->set_rules('kode_matakuliah', 'Kode Mata Kuliah', 'required');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'kode_matakuliah' => $this->input->post('kode_matakuliah'),
                'nama_matakuliah' => $this->input->post('nama_matakuliah'),
                'sks' => $this->input->post('sks'),
                'semester' => $this->input->post('semester'),
                'jenis' => $this->input->post('jenis'),
                'prodi' => $this->input->post('prodi')
            );
            
            $this->Matakuliah_model->update_matakuliah($id, $data);
            redirect('matakuliah');
        }
    }
}
