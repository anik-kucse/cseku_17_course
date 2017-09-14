<?php

/**
 * Index Controller
 */
class Index extends MainController
{

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $data = ['pageName' => 'home'];
        $this->load->view("header", $data);
        $this->load->view("home");
        $this->load->view("footer");
    }
}