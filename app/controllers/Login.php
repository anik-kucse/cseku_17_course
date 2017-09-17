<?php

/**
 * Login Controller
 */
class Login extends MainController
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->login();
    }

    public function login(){
        $data = ['pageName' => 'Log in'];
        $this->load->view("header", $data);
        $this->load->view("login/login");
        $this->load->view("footer");
    }

    public function loginAuth(){
        if (isset($_POST['btn_login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            echo "$username <br> $password";
            $loginModel = $this->load->model("LoginModel");
            
        }
    }
}
