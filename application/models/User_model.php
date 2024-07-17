<?php
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function login($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        return $query->row_array();
    }
}
