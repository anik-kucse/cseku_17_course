<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/28/2017
 * Time: 11:35 AM
 */
class RegisterCourseModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function insertRegisterCourse($data){
        $table = 'course_registration';
        return $this->db->insert($table,$data);
    }

    public function getTermListByUserId()
    {
        $sql = "SELECT course_registration.term_year_id
                FROM course_registration
                WHERE course_registration.user_id = :user_id
                GROUP BY course_registration.term_year_id";
        $userId = Session::get('id');
        $data = array(
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getCourseListByTermIdUserId($termId)
    {
        $sql = "SELECT course.courseNumber, course.courseTitle, course.credit, course_registration.is_approve
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.user_id = :user_id";
        $userId = Session::get('id');
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

    public function getSumOfCreditByTermIdUserId($termId)
    {
        $sql = "SELECT SUM(course.credit)
                FROM course_registration
                INNER JOIN course on course.id = course_registration.course_id
                WHERE course_registration.term_year_id = :term_year_id
                AND course_registration.user_id = :user_id";
        $userId = Session::get('id');
        $data = array(
            ':term_year_id' => $termId,
            ':user_id' => $userId
        );
        return $this->db->select($sql, $data);
    }

}
