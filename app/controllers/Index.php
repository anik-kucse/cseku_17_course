<?php

/**
 * Index Controller
 */
class Index extends MainController
{

    public function __construct(){
        parent::__construct();
//        Session::checkSession();
    }

    public function Index(){
        $this->home();
    }

    public function home(){
        $data = ['pageName' => 'home'];
        $this->load->view("header", $data);
        $this->load->view("home");
        $this->load->view("footer");
    }
    public function approvedStudent(){
        $data = ['pageName' => 'Approve Student'];
        $this->load->view("header", $data);
        $this->load->view("/admin/approvestudent");
        $this->load->view("footer");
    }
    public function requestedList(){
        $data = ['pageName' => 'Requested List'];
        $this->load->view("header", $data);
        $this->load->view("/admin/requestedlist");
        $this->load->view("footer");
    }
}
