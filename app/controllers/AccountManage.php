<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/26/2017
 * Time: 9:29 AM
 */
class AccountManage extends MainController{
    public  function __construct(){
        parent::__construct();
        Session::checkSession();
    }

    public function Index(){
        self::accountManage();
    }

    public function accountManage(){
    	$userModel = $this->load->model('UserModel');
    	$userName = $userModel->getUserName();
    	$studentModel = $this->load->model('StudentModel');
    	$studentDetail = $studentModel->GetStudentDetailByUserName($userName);

    	$data = ['pageName' => 'Account Manage'];
    	
        $this->load->view("header", $data);
        $this->load->view("accountmanage", $studentDetail);
        $this->load->view("footer");

    }
}