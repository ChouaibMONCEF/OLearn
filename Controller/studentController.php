<?php

require_once 'model/student.php';
require_once 'model/video.php';

class studentController{

    function index(){
        
        require __DIR__ . '/../View/Public/Register.php';
    }

    function test(){
    require __DIR__ . '/../View/Public/login.php';
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

    function Videos(){
        $obj = new video;
        $videos = $obj->getAll();
        require __DIR__ . '/../View/Student/videos.php';
    }

    function Watch($id)
    {
        if (isset($id) && !empty($id)) {
           $obj = new video;
            $videos = $obj->getById($id);
            require __DIR__ . '/../View/Student/watch.php';
        }else {
            header('Location: http://localhost/OLearn/Student/Videos');
        }
        
    }
}



?>