<?php

require_once 'model/teacher.php';

class teacherController{

    function index(){
        
        require __DIR__ . '/../View/Public/Register.php';
    }

    function register(){
        if (isset($_POST['fullname']) && !empty($_POST['fullname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pswrd']) && !empty($_POST['pswrd']) && isset($_POST['birthdate']) && !empty($_POST['birthdate']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['school']) && !empty($_POST['school']) && isset($_POST['experience']) && !empty($_POST['experience']) && isset($_POST['proof']) && !empty($_POST['proof']) && isset($_POST['letter']) && !empty($_POST['letter'])){
        $obj = new teacher;

        $obj->fullname = $_POST['fullname'];
        $obj->email = $_POST['email'];
        $obj->birthdate = $_POST['birthdate'];
        $obj->pswrd = $_POST['pswrd'];
        $obj->subject = $_POST['subject'];
        $obj->school = $_POST['school'];
        $obj->experience = $_POST['experience'];
        $obj->proof = $_POST['proof'];
        $obj->letter = $_POST['letter'];

        $obj->register();
        
        }else {
            echo"error";
        }
    }
}



?>