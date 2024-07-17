<?php
class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function home() {
        $this->load->view('home');
    }
}
