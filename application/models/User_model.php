<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $user = $query->row();
        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }

    public function register($username, $password) {
        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        );
        return $this->db->insert('users', $data);
    }
}
?>
