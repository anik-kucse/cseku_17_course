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
            $password = md5($_POST['password']);
            $table = "user";
            $loginModel = $this->load->model("LoginModel");
            $loginData  = $loginModel->getIdByUserNamePass($username, $password, $table);
            var_dump($loginData);

        }
    }
}
