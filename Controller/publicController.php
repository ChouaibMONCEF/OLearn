<?php


class publicController
{
    public function index()
    {
        if (isset($_SESSION['admin'])){
            header('Location: http://localhost/OLearn/admin/videos');
        }else if (isset($_SESSION['Teacher'])){
            header('Location: http://localhost/OLearn/teacher/Myvideos');
        }else if (isset($_SESSION['Student'])){
            header('Location: http://localhost/OLearn/Student/Videos');
        }else{
            require __DIR__ . '/../View/Public/Home.php';
        }
        
    }

    public function Register()
    {
        if (isset($_SESSION['admin'])){
            header('Location: http://localhost/OLearn/admin/videos');
        }else if (isset($_SESSION['Teacher'])){
            header('Location: http://localhost/OLearn/teacher/Myvideos');
        }else if (isset($_SESSION['Student'])){
            header('Location: http://localhost/OLearn/Student/Videos');
        }else{
            require __DIR__ . '/../View/Public/register.php';
        }
        
    }

    public function Login(){
        if (isset($_SESSION['admin'])){
            header('Location: http://localhost/OLearn/admin/videos');
        }else if (isset($_SESSION['Teacher'])){
            header('Location: http://localhost/OLearn/teacher/Myvideos');
        }else if (isset($_SESSION['Student'])){
            header('Location: http://localhost/OLearn/Student/Videos');
        }else{
            require __DIR__ . '/../View/Public/login.php';
        }
        
    }
    public function adminsecretbackdoorforlogin(){
        if (isset($_SESSION['admin'])){
            header('Location: http://localhost/OLearn/admin/videos');
        }else if (isset($_SESSION['Teacher'])){
            header('Location: http://localhost/OLearn/teacher/Myvideos');
        }else if (isset($_SESSION['Student'])){
            header('Location: http://localhost/OLearn/Student/Videos');
        }else{
            require __DIR__ . '/../View/Public/adminlogin.php';
        }
        
    }
    public function home(){
        if (isset($_SESSION['admin'])){
            header('Location: http://localhost/OLearn/admin/videos');
        }else if (isset($_SESSION['Teacher'])){
            header('Location: http://localhost/OLearn/teacher/Myvideos');
        }else if (isset($_SESSION['Student'])){
            header('Location: http://localhost/OLearn/Student/Videos');
        }else{
            require __DIR__ . '/../View/Public/home.php';
        }
        
    }
}