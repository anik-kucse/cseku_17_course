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

    public function getSubjectByTermName($term_Year_Id, $syllabus_Name_Id)
    {
        $sql = "SELECT 	course.courseNumber, course.courseTitle, course.credit, syllabus.subject_type 
                FROM syllabus 
			    INNER JOIN course 
        	    ON syllabus.course_Id = course.id
		        WHERE syllabus.term_Year_Id = :term_Year_Id
		        AND syllabus.syllabus_Name_Id = :syllabus_Name_Id";
        $data = array(
            ':term_Year_Id' => $term_Year_Id,
            ':syllabus_Name_Id' => $syllabus_Name_Id
        );

        return $this->db->select($sql,$data);


    }


}