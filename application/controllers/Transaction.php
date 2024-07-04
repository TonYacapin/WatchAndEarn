<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property User_model $user_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Transaction_model $transaction_model
 */

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaction_model', 'transaction_model'); // Correctly loading the Transaction_model
    }

    public function index()
    {
        $data['transactions'] = $this->transaction_model->get_all_transactions();
        $this->load->view('list_transactions', $data);
    }

    public function user_transactions()
    {
        $user_id = $this->session->userdata('user_id');
        $data['transactions'] = $this->transaction_model->get_transactions_by_user($user_id);
        $this->load->view('user_transactions', $data);
    }
}
