<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/21/2017
 * Time: 9:20 AM
 */
class SyllabusModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function ddlSyllabusName(){
        $sql = "SELECT * FROM syllabus_name ORDER BY id";
        return $this->db->select($sql);
    }


}