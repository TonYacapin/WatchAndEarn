<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Video_model $video_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries and models
        $this->load->model('Video_model', 'video_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
    }

    public function add_video()
    {
        // Form validation rules
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Video URL', 'required');
        $this->form_validation->set_rules('points_reward', 'Points Reward', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            // Validation failed, load the form view again
            $this->load->view('admin/add_video');
        } else {
            // Validation passed, insert video data into database
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $points_reward = $this->input->post('points_reward');

            if ($this->video_model->add_video($title, $url, $points_reward)) {
                $this->session->set_flashdata('success', 'Video added successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to add video.');
            }
            redirect('admin/add_video');
        }
    }
}
