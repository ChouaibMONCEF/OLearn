<?php

require_once 'model/teacher.php';
require_once 'model/video.php';

class teacherController
{
    public function index()
    {
        header('Location: http://localhost/OLearn/public/login');
    }

    public function login(){
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pswrd']) && !empty($_POST['pswrd'])){
            $obj = new teacher;

            $email = $_POST['email'];
            $pswrd = $_POST['pswrd'];

            $login = $obj->login($email);

            if($login == false){ 
                header('Location: http://localhost/OLearn/public/login');
            }else{
                if(!password_verify( $pswrd , $login->pswrd)){

                        header('Location: http://localhost/OLearn/public/login');

                    }else{
                        $_SESSION['Teacher'] = $login->id;
                        $_SESSION['isactive'] = $login->active;
                        header('Location: http://localhost/OLearn/teacher/Myvideos');
                    }
               
                // $_SESSION['Teacher'] = $login->id;
                // header('Location: http://localhost/OLearn/teacher/Myvideos');
            
            }
        }
    }

    public function register()
    {
        
        
        if (isset($_POST['fullname']) && !empty($_POST['fullname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pswrd']) && !empty($_POST['pswrd']) && isset($_POST['birthdate']) && !empty($_POST['birthdate']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['school']) && !empty($_POST['school']) && isset($_POST['experience']) && !empty($_POST['experience']) && isset($_FILES['proof']) && isset($_POST['letter']) && !empty($_POST['letter'])) {
            $obj = new teacher;
            $obj->fullname = $_POST['fullname'];
            $obj->email = $_POST['email'];
            $obj->birthdate = $_POST['birthdate'];
            $obj->pswrd = password_hash($_POST['pswrd'], PASSWORD_DEFAULT);
            $obj->subject = $_POST['subject'];
            $obj->school = $_POST['school'];
            $obj->experience = $_POST['experience'];
            $obj->proof = $_FILES['proof']['name'];
            $img = $_FILES['proof']['name'];
            move_uploaded_file($_FILES['proof']['tmp_name'], "Assets/proof/$img");
            $obj->letter = $_POST['letter'];
            $obj->applydate = date("Y/m/d");
            $obj->register();
            header('Location: http://localhost/OLearn/public/login');
        } else {
            header('Location: http://localhost/OLearn/public/register');
        }
    }

    function add(){
        if (isset($_SESSION['Teacher']) && $_SESSION['isactive'] == 1) {
        require __DIR__ . '/../View/teacher/add.php';
        if (isset($_POST['video']) && !empty($_POST['video']) && isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['grade']) && !empty($_POST['grade']) && isset($_POST['dscr']) && !empty($_POST['dscr']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_FILES['thumbnail'])){
        $obj = new video;

        $link = explode("/",$_POST['video']);
        // print_r($link[3]);
        if(strstr($link[3], 'watch') == true){
            $nlink = explode("=", $link[3]);
            // print_r($nlink[1]);
            
            if(strstr($nlink[1 ], '&') == true){
            $flink = explode("&", $nlink[1]);
            $obj->video = $flink[0];
            // print_r($flink[0]);

        }else{
            $obj->video = $nlink[1];
        }
        }else{
            $obj->video = $link[3];
        }
       
        
        $obj->title = $_POST['title'];
        $obj->dscr = $_POST['dscr'];
        $obj->grade = $_POST['grade'];
        $obj->subject = $_POST['subject'];
        $obj->thumbnail = $_FILES['thumbnail']['name'];
        $img = $_FILES['thumbnail']['name'];
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], "Assets/thumbnail/$img");
        $obj->adddate = date("Y/m/d");
        $obj->tid = $_SESSION['Teacher'];

        $obj->addVideo();
        header('Location: http://localhost/OLearn/teacher/myvideos');
        
        }
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    // public function ApproveTeachers()
    // {
    //     $obj = new teacher;
    //     $teachers = $obj->getAll();
    //     require __DIR__ . '/../View/admin/teachers.php';
    // }

    public function MyVideos()
    {
        if (isset($_SESSION['Teacher'])) {
        $obj = new video;
        $id = $_SESSION['Teacher'];
        $videos = $obj->myvids($id);
        require __DIR__ . '/../View/teacher/videos.php';
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    // function ApproveVideos(){
    //     $obj = new video;
    //     $videos = $obj->getAll();
    //     require __DIR__ . '/../View/admin/videos.php';
    // }

    function UpdateVideo($id){
        if (isset($_SESSION['Teacher']) && $_SESSION['isactive'] == 1) {
        $obj = new video;
        $videos = $obj->getById($id);
        require __DIR__ . '/../View/teacher/edit.php';
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function Update($id){
        if (isset($_SESSION['Teacher']) && $_SESSION['isactive'] == 1) {
        $obj = new video;
        $obj->title = $_POST['title'];
        $obj->dscr = $_POST['dscr'];
        $obj->update($id);
        header('Location: http://localhost/OLearn/teacher/MyVideos');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function Delete($id){
        if (isset($_SESSION['Teacher']) && $_SESSION['isactive'] == 1) {
        $obj = new video;
        $obj->Delete($id);
        header('Location: http://localhost/OLearn/video/MyVideos');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }

    function logout(){
        if (isset($_SESSION['Teacher'])) {
        session_destroy();
        header('Location: http://localhost/OLearn/public/login');
        }else {
            header('Location: http://localhost/OLearn/public/login');
        }
    }
}
?>