<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $user = $query->row();
        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }

    public function ban_user($user_id)
{
    $data = array(
        'role' => 'Banned'
    );

    $this->db->where('id', $user_id);
    return $this->db->update('users', $data);
}

    public function register($username, $password, $role = 'customer')
    {
        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role' => $role
        );
        return $this->db->insert('users', $data);
    }

    public function get_user_by_id($user_id)
    {
        return $this->db->get_where('users', array('id' => $user_id))->row();
    }

    public function update_points($user_id, $points)
    {
        $this->db->set('points', 'points + ' . (int)$points, FALSE);
        $this->db->where('id', $user_id);
        return $this->db->update('users');
    }
    public function add_transaction($user_id, $points, $cash_amount)
    {
        $data = array(
            'user_id' => $user_id,
            'points' => $points,
            'cash_amount' => $cash_amount
        );
        return $this->db->insert('transactions', $data);
    }


    public function get_transactions_by_user_id($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('transactions');
        return $query->result();
    }

    public function get_all_users()
{
    return $this->db->get('users')->result();
}

public function update_user($user_id, $username, $role)
{
    $data = array(
        'username' => $username,
        'role' => $role
    );

    $this->db->where('id', $user_id);
    return $this->db->update('users', $data);
}

public function delete_user($user_id)
{
    $this->db->where('id', $user_id);
    return $this->db->delete('users');
}
}
