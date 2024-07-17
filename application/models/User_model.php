<?php
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_posts() {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('posts')->result();
    }

    public function get_post($id) {
        return $this->db->get_where('posts', array('id' => $id))->row();
    }
}
