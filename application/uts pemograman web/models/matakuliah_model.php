<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah_model extends CI_Model {

    public function get_all_matakuliah() {
        return $this->db->get('matakuliah')->result_array();
    }

    public function insert_matakuliah($data) {
        return $this->db->insert('matakuliah', $data);
    }

    public function get_matakuliah_by_id($id) {
        return $this->db->get_where('matakuliah', ['id' => $id])->row_array();
    }

    public function update_matakuliah($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('matakuliah', $data);
    }

    public function delete_matakuliah($id) {
        $this->db->where('id', $id);
        return $this->db->delete('matakuliah');
    }
}
