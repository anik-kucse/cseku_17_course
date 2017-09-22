<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/21/2017
 * Time: 9:15 AM
 */
class Syllabus extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function Index(){
        self::syllabus();
    }

    public function syllabus(){
        $data = ['pageName' => 'Syllabus'];
        $this->load->view("header", $data);
        $syllabusModel = $this->load->model('SyllabusModel');
        $loadDropDown = $this->load->model('LoadDropDown');
        $term = $loadDropDown->getAllYearTerm();
        $syllabusName = $syllabusModel->ddlSyllabusName();
        array_push($data, $term);
        array_push($data, $syllabusName);
        $this->load->view("syllabus", $data);
        $this->load->view("footer");
    }
}