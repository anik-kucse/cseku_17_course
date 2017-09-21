<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 9/20/2017
 * Time: 6:10 PM
 */
class UserModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function getUserByUserName($user_name){
        $sql = "SELECT * FROM user WHERE user_name = :user_name";
        $data = array(
            ':user_name' => $user_name
        );
        return $this->db->select($sql, $data);
    }

    public function insertIntoUser($data){
        return $this->db->insert('user', $data, true);
    }

    public function insertIntoStudent($data){
        return $this->db->insert('student', $data);
    }
}