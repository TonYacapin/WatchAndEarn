<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property User_model $user_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Video_model $video_model
 */
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user_model');
        $this->load->model('Video_model', 'video_model'); // Load Video_model in constructor
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('auth/dashboard');
        }
        $this->load->view('login');
    }

    public function login()
    {
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
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'role' => $user->role,
                    'logged_in' => TRUE
                ));
                redirect('auth/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid login credentials');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('user_id', 'username', 'role', 'logged_in'));
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function dashboard()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->user_model->get_user_by_id($user_id);
        $this->load->view('dashboard', $data);
    }

    public function register()
    {
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

    public function watch_video()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        // Get a random video from your database
        $video = $this->video_model->get_random_video();

        if ($video) {
            $data['video'] = $video;
            $this->load->view('watch_video', $data);
        } else {
            // Handle error if no video is found
            $this->session->set_flashdata('error', 'No video available.');
            redirect('auth/dashboard');
        }
    }

    public function earn_points($video_id)
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    // Validate if the video ID exists and is valid in your application
    $video = $this->video_model->get_video($video_id);

    if ($video) {
        // Simulate rewarding points after watching the video
        $user_id = $this->session->userdata('user_id');
        
        // Debugging
        log_message('debug', 'User ID: ' . $user_id);
        log_message('debug', 'Video Points Reward: ' . $video->points_reward);

        $this->user_model->update_points($user_id, $video->points_reward);

        // Check if points were updated successfully
        $user = $this->user_model->get_user_by_id($user_id);
        log_message('debug', 'Updated Points: ' . $user->points);

        $this->session->set_flashdata('success', 'You have earned ' . $video->points_reward . ' points!');
    } else {
        $this->session->set_flashdata('error', 'Invalid video.');
    }

    redirect('auth/dashboard');
}
    public function convert_points_to_cash()
    {
        $user_id = $this->session->userdata('user_id');
        $user = $this->user_model->get_user_by_id($user_id);

        $conversion_rate = 0.01; // 1 point = $0.01

        $cash_amount = $user->points * $conversion_rate;

        if ($this->user_model->update_points($user_id, -$user->points)) {
            if ($this->user_model->add_transaction($user_id, -$user->points, $cash_amount)) {
                $this->session->set_flashdata('success', 'Points converted to cash successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to record transaction.');
            }
        } else {
            $this->session->set_flashdata('error', 'Failed to deduct points.');
        }
        redirect('auth/dashboard');
    }
    public function add_video()
    {
        // Check if user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect to login page if not logged in
        }
    
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Video URL', 'required');
        $this->form_validation->set_rules('points_reward', 'Points Reward', 'required|numeric');
    
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('add_video'); // Display the add_video view with validation errors
        } else {
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $points_reward = $this->input->post('points_reward');
    
            if ($this->video_model->add_video($title, $url, $points_reward)) {
                $this->session->set_flashdata('success', 'Video added successfully.');
                redirect('auth/dashboard'); // Redirect to dashboard or wherever appropriate
            } else {
                $this->session->set_flashdata('error', 'Failed to add video.');
                redirect('auth/add_video'); // Redirect back to add video form with error
            }
        }
    }


    public function list_videos()
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $data['videos'] = $this->video_model->get_all_videos();
    $this->load->view('list_videos', $data);
}

public function edit_video($video_id)
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('url', 'Video URL', 'required');
    $this->form_validation->set_rules('points_reward', 'Points Reward', 'required|numeric');

    if ($this->form_validation->run() === FALSE) {
        $data['video'] = $this->video_model->get_video($video_id);
        $this->load->view('edit_video', $data);
    } else {
        $title = $this->input->post('title');
        $url = $this->input->post('url');
        $points_reward = $this->input->post('points_reward');

        if ($this->video_model->update_video($video_id, $title, $url, $points_reward)) {
            $this->session->set_flashdata('success', 'Video updated successfully.');
            redirect('auth/list_videos');
        } else {
            $this->session->set_flashdata('error', 'Failed to update video.');
            redirect('auth/edit_video/'.$video_id);
        }
    }
}

public function delete_video($video_id)
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    if ($this->video_model->delete_video($video_id)) {
        $this->session->set_flashdata('success', 'Video deleted successfully.');
    } else {
        $this->session->set_flashdata('error', 'Failed to delete video.');
    }
    redirect('auth/list_videos');
}


public function list_users()
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $data['users'] = $this->user_model->get_all_users();
    $this->load->view('list_users', $data);
}

public function add_user()
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE) {
        $this->load->view('add_user');
    } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        if ($this->user_model->register($username, $password, $role)) {
            $this->session->set_flashdata('success', 'User added successfully.');
            redirect('auth/list_users');
        } else {
            $this->session->set_flashdata('error', 'Failed to add user.');
            redirect('auth/add_user');
        }
    }
}

public function edit_user($user_id)
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['user'] = $this->user_model->get_user_by_id($user_id);
        $this->load->view('edit_user', $data);
    } else {
        $username = $this->input->post('username');
        $role = $this->input->post('role');

        if ($this->user_model->update_user($user_id, $username, $role)) {
            $this->session->set_flashdata('success', 'User updated successfully.');
            redirect('auth/list_users');
        } else {
            $this->session->set_flashdata('error', 'Failed to update user.');
            redirect('auth/edit_user/'.$user_id);
        }
    }
}

public function delete_user($user_id)
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    if ($this->user_model->delete_user($user_id)) {
        $this->session->set_flashdata('success', 'User deleted successfully.');
    } else {
        $this->session->set_flashdata('error', 'Failed to delete user.');
    }
    redirect('auth/list_users');
}

}
?>

