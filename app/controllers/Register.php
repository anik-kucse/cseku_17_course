<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/19/2017
 * Time: 7:14 AM
 */
class Register extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index(){
        self::register();
    }

    public function register(){
        Session::init();
        if(Session::get("login") == true ){
            header("Location: ".BASE_URL."/Index/accountManage");
        } else {
            $data = ['pageName' => 'Register New Member'];
            $this->load->view("header", $data);
            $this->load->view("registration");
            $this->load->view("footer");
        }
    }

    public function registerNewMember(){
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $studentId = $_POST['studentId'];
        $mobile = $_POST['mobile'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $error = [];

        if(empty($firstName)){
            var_dump(1);
            array_push($error,"First Name Required");
        }
        if(empty($studentId)){
            array_push($error,"Student ID Name Required");
        }
        if(empty($userName)){
            array_push($error,"Username ID Name Required");
        }
        if(empty($password)){
            array_push($error,"Password ID Name Required");
        }
        if(empty($confirmPassword)){
            array_push($error,"Password confirmation Required");
        }

        var_dump($error);


        var_dump($firstName);
        var_dump($middleName);
        var_dump($lastName);
        var_dump($studentId);
        var_dump($mobile);
        var_dump($userName);
        var_dump($email);
        var_dump($password);
        var_dump($confirmPassword);

    }
}