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

    public function approvedStudent(){
        $data = ['pageName' => 'approvedStudent'];
        $this->load->view("header", $data);
        $this->load->view("/admin/approvestudent");
        $this->load->view("footer");
    }
}
