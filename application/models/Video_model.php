<?php

class Video_model extends CI_Model {
    public function get_random_video() {
        $query = $this->db->order_by('id', 'RANDOM')->limit(1)->get('videos');
        return $query->row();
    }

    public function get_video($id) {
        $query = $this->db->where('id', $id)->get('videos');
        return $query->row();
    }

    public function add_video($title, $url, $points_reward) {
        $data = array(
            'title' => $title,
            'url' => $url,
            'points_reward' => $points_reward
        );
        return $this->db->insert('videos', $data);
    }

    public function update_video($id, $title, $url, $points_reward) {
        $data = array(
            'title' => $title,
            'url' => $url,
            'points_reward' => $points_reward
        );
        $this->db->where('id', $id);
        return $this->db->update('videos', $data);
    }

    public function delete_video($id) {
        $this->db->where('id', $id);
        return $this->db->delete('videos');
    }
}

?>
