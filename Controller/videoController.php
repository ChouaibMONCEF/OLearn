<?php

require_once 'model/video.php';

class videoController{

    function index(){
        
    }

    // function add(){
    //     require __DIR__ . '/../View/teacher/add.php';
    //     if (isset($_POST['video']) && !empty($_POST['video']) && isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['grade']) && !empty($_POST['grade']) && isset($_POST['dscr']) && !empty($_POST['dscr']) && isset($_POST['subject']) && !empty($_POST['subject']) && isset($_FILES['thumbnail']) && !empty($_FILES['thumbnail'])){
    //     $obj = new video;

    //     $obj->video = $_POST['video'];
    //     $obj->title = $_POST['title'];
    //     $obj->dscr = $_POST['dscr'];
    //     $obj->grade = $_POST['grade'];
    //     $obj->subject = $_POST['subject'];
    //     $obj->thumbnail = $_POST['thumbnail'];
    //     $obj->adddate = date("Y/m/d");

    //     $obj->addVideo();
        
    //     }else {
    //         echo"error";
    //     }
    // }

    // function MyVideos(){
    //     $obj = new video;
    //     $videos = $obj->getAll();
    //     require __DIR__ . '/../View/teacher/videos.php';
    // }

    // function ApproveVideos(){
    //     $obj = new video;
    //     $videos = $obj->getAll();
    //     require __DIR__ . '/../View/admin/videos.php';
    // }

    // function UpdateVideo($id){
    //     $obj = new video;
    //     $videos = $obj->getById($id);
    //     require __DIR__ . '/../View/teacher/edit.php';
    // }

    // function Update($id){
    //     $obj = new video;
    //     $obj->title = $_POST['title'];
    //     $obj->dscr = $_POST['dscr'];
    //     $obj->update($id);
    //     header('Location: http://localhost/OLearn/video/MyVideos');
    // }

    // function Delete($id){
    //     $obj = new video;
    //     $obj->Delete($id);
    //     header('Location: http://localhost/OLearn/video/MyVideos');
    // }
}



?>