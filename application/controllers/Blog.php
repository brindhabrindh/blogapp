<?php
class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('home');
    }

    public function home() {
        $this->load->view('home');
    }

    public function register() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Validation failed, show registration form again
            $this->load->view('register');
        } else {
            // Validation passed, insert user into database
            $data = array(
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );

            $this->user_model->register($data);
            redirect('blog/login');
        }
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Validation failed, show login form again
            $this->load->view('login');
        } else {
            // Validation passed, attempt login
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->user_model->login($email, $password);

            if ($user) {
                // User found, set session and redirect to dashboard or home
                $this->session->set_userdata('user_id', $user['id']);
                redirect('dashboard'); // Change 'dashboard' to your desired redirect URL
            } else {
                // User not found or password incorrect
                $data['error'] = 'Invalid email or password';
                $this->load->view('login', $data);
            }
        }
    }
}
