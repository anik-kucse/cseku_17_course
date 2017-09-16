<?php

class Database extends PDO {

    public function __construct($dsn,$user,$pass){
        parent::__construct($dsn,$user,$pass);
    }

    public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC){
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindParam($key, $value);
        }
        $stmt->execute();
        return $stmt->fetchAll($fetchStyle);
    }

    public function insert($table, $data){
        $columnName = implode(",", array_keys($data));
        $values = ":".implode(", :", array_keys($data));

        $sql = "INSERT INTO $table($columnName) VALUES($values)";
        $stmt = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }
        return $stmt->execute();
    }

    public function update($table, $data, $cond){
        $updateKeys = NULL;
        foreach ($data as $key => $value){
            $updateKeys .= "$key=:$key,";
        }
        $updateKeys = rtrim($updateKeys, ",");

        $sql = "UPDATE $table SET $updateKeys WHERE $cond";
        $stmt = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }

    public function delete($table, $cond){
        $sql = "DELETE FROM $table WHERE $cond";
        return $this->exec($sql);
    }

}