<?php

require_once 'model/teacher.php';
require_once 'model/video.php';

class teacherController
{
    public function index()
    {
        require __DIR__ . '/../View/Public/Home.php';
    }

    public function register()
    {
        if (isset($_POST['fullname']) && !empty($_POST['fullname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pswrd']) && !empty($_POST['pswrd']) && isset($_POST['birthdate']) && !empty($_POST['birthdate']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['school']) && !empty($_POST['school']) && isset($_POST['experience']) && !empty($_POST['experience']) && isset($_POST['proof']) && !empty($_POST['proof']) && isset($_POST['letter']) && !empty($_POST['letter'])) {
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
            $obj->applydate = date("Y/m/d");
            $obj->register();
        } else {
            echo"error";
        }
    }

    function add(){
        require __DIR__ . '/../View/teacher/add.php';
        if (isset($_POST['video']) && !empty($_POST['video']) && isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['grade']) && !empty($_POST['grade']) && isset($_POST['dscr']) && !empty($_POST['dscr']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_POST['thumbnail']) && !empty($_POST['thumbnail'])){
        $obj = new video;

        $obj->video = $_POST['video'];
        $obj->title = $_POST['title'];
        $obj->dscr = $_POST['dscr'];
        $obj->grade = $_POST['grade'];
        $obj->subject = $_POST['subject'];
        $obj->thumbnail = $_POST['thumbnail'];
        $obj->adddate = date("Y/m/d");

        $obj->addVideo();
        
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
        $obj = new video;
        $videos = $obj->getAll();
        require __DIR__ . '/../View/teacher/videos.php';
    }

    // function ApproveVideos(){
    //     $obj = new video;
    //     $videos = $obj->getAll();
    //     require __DIR__ . '/../View/admin/videos.php';
    // }

    function UpdateVideo($id){
        $obj = new video;
        $videos = $obj->getById($id);
        require __DIR__ . '/../View/teacher/edit.php';
    }

    function Update($id){
        $obj = new video;
        $obj->title = $_POST['title'];
        $obj->dscr = $_POST['dscr'];
        $obj->update($id);
        header('Location: http://localhost/OLearn/video/MyVideos');
    }

    function Delete($id){
        $obj = new video;
        $obj->Delete($id);
        header('Location: http://localhost/OLearn/video/MyVideos');
    }
}
?>