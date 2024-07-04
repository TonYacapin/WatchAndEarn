<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction_model extends CI_Model
{
    public function get_all_transactions()
    {
        $this->db->select('transactions.*, users.username');
        $this->db->from('transactions');
        $this->db->join('users', 'transactions.user_id = users.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_transactions_by_user($user_id)
    {
        $this->db->select('transactions.*, users.username');
        $this->db->from('transactions');
        $this->db->join('users', 'transactions.user_id = users.id');
        $this->db->where('transactions.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
}
