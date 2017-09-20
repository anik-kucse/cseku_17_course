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

    public function register($error = false){
        Session::init();
        if(Session::get("login") == true ){
            header("Location: ".BASE_URL."/Index/accountManage");
        } else {
            $data = ['pageName' => 'Register New Member'];
            $this->load->view("header", $data);
            $loadDropDown = $this->load->model("LoadDropDown");
            $yearTerm = $loadDropDown->getAllYearTerm();
            $session = $loadDropDown->getAllSession();

            array_push($data, $error);
            array_push($data, $yearTerm);
            array_push($data, $session);

            $this->load->view("registration",$data);
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
        $ddlYearTerm = $_POST['ddlYearTerm'];
        $ddlSession = $_POST['ddlSession'];

        $error = [];

        if(empty($firstName)){
            array_push($error,"First Name Required");
        }
        if(empty($studentId)){
            array_push($error,"Student ID Required");
        }
        if(empty($userName)){
            array_push($error,"Username Required");
        }
        if(empty($password)){
            array_push($error,"Password Required");
        }
        if(empty($confirmPassword)){
            array_push($error,"Password confirmation Required");
        }
        if($ddlYearTerm == '0'){
            array_push($error, "Please select year-term");
        }
        if($ddlSession == '0'){
            array_push($error, "Please select session");
        }
        if(!empty($error)){
            self::register($error);
        }


        var_dump($firstName);
        var_dump($middleName);
        var_dump($lastName);
        var_dump($studentId);
        var_dump($mobile);
        var_dump($userName);
        var_dump($email);
        var_dump($password);
        var_dump($confirmPassword);
        var_dump($ddlYearTerm);
        var_dump($ddlSession);

    }
}