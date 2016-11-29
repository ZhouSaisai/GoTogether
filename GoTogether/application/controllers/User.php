<?php
class User extends CI_Controller {

    public function __construct(){
    }

    public function index(){
        $this->load->view('user/login');
    }

    public function login(){
        $this->load->view('user/login');
    }

    public function register(){
        $this->load->view('user/register');
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a user item';

        $this->form_validation->set_rules('userName', 'UserName', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('user/login');
        }
        else {
            $this->user_model->set_user();
            $this->load->view('welcome/index');
        }
    }

}