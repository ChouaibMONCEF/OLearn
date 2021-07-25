<?php

require_once 'model/student.php';

class studentController{

    function index(){
        
        require __DIR__ . '/../View/Public/Register.php';
    }

    function register(){
        if (isset($_POST['fullname']) && !empty($_POST['fullname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['birthdate']) && !empty($_POST['birthdate']) && isset($_POST['pswrd']) && !empty($_POST['pswrd'])){
        $obj = new student;

        $obj->fullname = $_POST['fullname'];
        $obj->email = $_POST['email'];
        $obj->birthdate = $_POST['birthdate'];
        $obj->pswrd = $_POST['pswrd'];

        $obj->register();
        
        }else {
            echo"error";
        }
    }
}



?>