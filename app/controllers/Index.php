<?php

/**
 * Index Controller
 */
class Index extends MainController
{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->home();
    }

    public function home(){
        $data = ['pageName' => 'home'];
        $this->load->view("header", $data);
        $this->load->view("home");
        $this->load->view("footer");
    }

    public function syllabus(){
        $data = ['pageName' => 'Syllabus'];
        $this->load->view("header", $data);
        $this->load->view("syllabus");
        $this->load->view("footer");
    }

    public function result(){
        $data = ['pageName' => 'Result'];
        $this->load->view("header", $data);
        $this->load->view("result");
        $this->load->view("footer");
    }

    public function courseRegistration(){
        $data = ['pageName' => 'Course Registation'];
        $this->load->view("header", $data);
        $this->load->view("courseresistration");
        $this->load->view("footer");
    }

    public function newSyllabus(){
        $data = ['pageName' => 'Add new Syllabus'];
        $this->load->view("header", $data);
        $this->load->view("newsyllabus");
        $this->load->view("footer");
    }

    public function registration(){
        $data = ['pageName' => 'Registration'];
        $this->load->view("header", $data);
        $this->load->view("registration");
        $this->load->view("footer");
    }

    public function accountmanage(){
        $data = ['pageName' => 'Account Manage'];
        $this->load->view("header", $data);
        $this->load->view("accountmanage");
        $this->load->view("footer");
    }

}