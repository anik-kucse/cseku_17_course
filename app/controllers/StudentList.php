<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/26/2017
 * Time: 7:27 AM
 */

class StudentList extends MainController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::main();
    }

    public function main(){
        $pageName = ['pageName' => 'Student List'];
        $studentModel = $this->load->model('StudentModel');
        $data['table'] = $studentModel->GetAllStudentDetail();


        $this->load->view('header', $pageName);
        $this->load->view('admin/studentlist', $data);
        $this->load->view('footer');
    }

}