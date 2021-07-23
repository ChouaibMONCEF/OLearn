<?php

class connection
{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'olearn';
    public $sql;

    public function __construct()
    {
        try {
            $this->sql = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        } catch (PDOException $e) {
            echo "connection failed:" . $e->getMessage();
        }
    }

    // ----------------------------------------------------------------getAll

    public function getAll($table)
    {
        $query = "SELECT * from" . $table;
        return $this->sql->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    // ----------------------------------------------------------------delete

    public function delete($table, $id)
    {
        $query = "DELETE from $table WHERE id=$id";
        $this->sql->query($query);
    }

    // ----------------------------------------------------------------add

    public function add($table, $tabName, $tabValue)
    {
        $name = "";
        $value = "";
        $vrg = "";
        for ($i = 0; $i < count($tabName); $i++) {
            if ($i > 0) {
                $vrg = ",";
            }
            $name .= $vrg . "`" . $tabName[$i] . "`";
        }

        $vrg = "";
        for ($i = 0; $i < count($tabValue); $i++) {
            if ($i > 0) {
                $vrg = ",";
            }
            $value .= $vrg . "'" . $tabValue[$i] . "'";
        }
        $query = "INSERT INTO " . $table . "(" . $name . ") VALUES (" . $value . ")";

        if ($this->sql->query($query)) {
            return true;
        }

        return false;
    }

    // ----------------------------------------------------------------update

    public function update($table, $tabName, $tabValue, $id)
    {
        $name = "";
        $value = "";
        $vrg = "";
        for ($i = 0; $i < count($tabName); $i++) {
            if ($i > 0) {
                $vrg = ",";
            }
            $name .= $vrg . "`" "". $tabName[$i] . "`" . $tabValue . "`";
        }

        $query = "UPDATE " . $table . " SET" . $name . " WHERE id=" . $id;
        $this->sql->query($query);
    }

    // ---------------------------------------------------------------add

    public function edit($table, $id)
    {
        $query = "SELECT * FROM " . $table . "WHERE id=" . $id;
        return $this->sql->query($query)->fetchAll()[0];
    }

    public function selectById($id)
    {

        $query = "SELECT * FROM appointments WHERE Rref='$id'";


        if ($this->sql->query($query)) {
            return $this->sql->query($query)->fetchAll();
        } else {
            echo "Error";
        }
        // die(print_r($query));
    }

    // public function login($Reference)
    // {
    //     $query = "SELECT * FROM users WHERE uref='" . $Reference . "'";
    //     return $this->sql->query($query);
    // }

    public function edit($table, $username, $email)
    {
        $query = "SELECT * FROM " . $table . "WHERE id=" . $id;
        return $this->sql->query($query);
    }
}
