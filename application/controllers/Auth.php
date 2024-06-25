<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property User_model $user_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model', 'user_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('auth/dashboard');
        }
        $this->load->view('login');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->user_model->login($username, $password);

            if ($user) {
                $this->session->set_userdata(array(
                    'username' => $user->username,
                    'logged_in' => TRUE
                ));
                redirect('auth/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid login credentials');
                redirect('auth');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata(array('username', 'logged_in'));
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function dashboard() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
        $this->load->view('dashboard');
    }

    public function register() {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('register');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->user_model->register($username, $password, 'customer')) {
                $this->session->set_flashdata('success', 'Registration successful. Please log in.');
                redirect('auth');
            } else {
                $this->session->set_flashdata('error', 'Failed to register user.');
                redirect('auth/register');
            }
        }
    }
}
?>
