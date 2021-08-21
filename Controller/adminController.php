<?php

require_once 'model/admin.php';
require_once 'model/teacher.php';
require_once 'model/video.php';

class adminController{

    function index(){

        header('Location: http://localhost/OLearn/public/adminsecretbackdoorforlogin');
    }

    public function login(){
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['pswrd']) && !empty($_POST['pswrd'])){
            $obj = new admin;

            $username = $_POST['username'];
            $pswrd = $_POST['pswrd'];

            $login = $obj->connect($username, $pswrd);

            if($login == false){
                header('Location: http://localhost/OLearn/public/adminsecretbackdoorforlogin');
            }else{
                foreach($login as $key){
                $_SESSION['admin'] = $key['id'];
                header('Location: http://localhost/OLearn/admin/videos');
            }
            }
        }
    }

    

    function Videos(){
        if (isset($_SESSION['admin'])) {
        $obj = new video;
        $videos = $obj->getAll();
        require __DIR__ . '/../View/admin/videos.php';
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function approveVideo($id){
        if (isset($_SESSION['admin'])) {
        $obj = new video;
        $videos = $obj->getById($id);
        require __DIR__ . '/../View/admin/videoapprove.php';
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function Teachers()
    {
        if (isset($_SESSION['admin'])) {
        $obj = new teacher;
        $teachers = $obj->getAll();
        require __DIR__ . '/../View/admin/teachers.php';
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function approveteacher($id)
    {
        if (isset($_SESSION['admin'])) {
        $obj = new teacher;
        $teachers = $obj->getById($id);
        require __DIR__ . '/../View/admin/teacherapprove.php';
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    
    function Delete($id){
        if (isset($_SESSION['admin'])) {
        $obj = new teacher;
        $obj->Delete($id);
        header('Location: http://localhost/OLearn/admin/teachers');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function updatet($id){
        if (isset($_SESSION['admin'])) {
        $obj = new teacher;
        $obj->active = $_POST['active'];

        $obj->accept($id);
        header('Location: http://localhost/OLearn/admin/teachers');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }
    function updatev($id){
        if (isset($_SESSION['admin'])) {
        $obj = new video;
        $obj->active = $_POST['active'];

        $obj->accept($id);
        header('Location: http://localhost/OLearn/admin/videos');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function logout(){
        if (isset($_SESSION['admin'])) {
        session_destroy();
        header('Location: http://localhost/OLearn/public/login');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

}



?>