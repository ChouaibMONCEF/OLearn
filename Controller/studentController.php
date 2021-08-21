<?php

require_once 'model/student.php';
require_once 'model/video.php';
require_once 'model/comment.php';

class studentController{

    function index(){
        
        header('Location: http://localhost/OLearn/public/login');
    }

    public function login(){
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pswrd']) && !empty($_POST['pswrd'])){
            $obj = new student;

            $email = $_POST['email'];
            $pswrd = $_POST['pswrd'];

            $login = $obj->connect($email, $pswrd);

            if($login == false){
                header('Location: http://localhost/OLearn/public/login');
            }else{
                foreach($login as $key){
                $_SESSION['Studentid'] = $key['id'];
                $_SESSION['Student'] = $key['fullname'];
                header('Location: http://localhost/OLearn/student/videos');
            }
            }
        }
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
        if (isset($_SESSION['Student'])) {
        $obj = new video;
        $videos = $obj->getAccepted();
        require __DIR__ . '/../View/Student/videos.php';
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function Watch($id)
    {
        if (isset($_SESSION['Student'])) {
        if (isset($id) && !empty($id)) {
           $obj = new video;
            $videos = $obj->getvac($id);
            $coms = $obj->getcom($id);
            require __DIR__ . '/../View/Student/watch.php';
        }else {
            header('Location: http://localhost/OLearn/Student/Videos');
        }
    }else {
            header('Location: http://localhost/OLearn/public/login');
        }
        
    }

    function Addcomment()
    {
        if (isset($_SESSION['Student'])) {
        if (isset($_POST['com']) && !empty($_POST['com'])){
            $obj = new comment;
            $obj->com = $_POST['com'];
            $obj->vid = $_POST['vid'];
            $obj->postdate = date("Y/m/d h:i:s");
            $obj->student = $_SESSION['Student'];
            $obj->sid = $_SESSION['Studentid'];

            $obj->addcomment();
            header('Location: http://localhost/OLearn/student/videos');
        }
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
        
    }
    function logout(){
        if (isset($_SESSION['Student'])) {
        session_destroy();
        header('Location: http://localhost/OLearn/public/login');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }
}



?>