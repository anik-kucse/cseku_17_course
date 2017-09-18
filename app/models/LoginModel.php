<?php

/**
 * LoginModel Model
 */
class LoginModel extends MainModel
{
    public function __construct(){
        parent::__construct();
    }

    public function getIdByUserNamePass($username, $pass, $table){
        $sql = "SELECT * FROM $table WHERE user_name = :user_name AND password = :password";
        $data = array(
            ":user_name" => $username,
            ":password" => $pass
        );
        return $this->db->select($sql, $data);
    }

    public function catList($table){
        $sql = "SELECT * FROM $table" ;
        return $this->db->select($sql);
    }

    public function catById($table, $id){
        $sql = "SELECT * FROM $table WHERE id = :id";
        $data = array(
            ":id" => $id
        );
        return $this->db->select($sql, $data);
    }

    public function insertCat($table, $data){
        return $this->db->insert($table,$data);
    }

    public function catUpdate($table, $data, $cond){
        return $this->db->update($table, $data, $cond);
    }

    public function catDelete($table, $cond){
        return $this->db->delete($table, $cond);
    }


}