<?php

class Users_model extends CI_Model {
    // Fungsi untuk menyimpan user ke dalam database
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    // Fungsi untuk memeriksa user berdasarkan username dan password
    public function check_user($username, $password) {
        $this->db->where('username', $username);
        $user = $this->db->get('users')->row();  // Ambil user berdasarkan username

        if ($user && password_verify($password, $user->password)) {
            return $user;  // Kembalikan data user jika password cocok
        }
        return false;  // Jika tidak ditemukan atau password tidak cocok
    }
}
