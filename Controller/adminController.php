<?php

require_once 'model/admin.php';
require_once 'model/teacher.php';
require_once 'model/video.php';

class adminController{

    function index(){
        
        require __DIR__ . '/../View/Public/adminlogin.php';
    }

    

    function Videos(){
        $obj = new video;
        $videos = $obj->getAll();
        require __DIR__ . '/../View/admin/videos.php';
    }

    function approveVideo($id){
        $obj = new video;
        $videos = $obj->getById($id);
        require __DIR__ . '/../View/admin/videoapprove.php';
    }

    function Teachers()
    {
        $obj = new teacher;
        $teachers = $obj->getAll();
        require __DIR__ . '/../View/admin/teachers.php';
    }

    function approveteacher($id)
    {
        $obj = new teacher;
        $teachers = $obj->getById($id);
        require __DIR__ . '/../View/admin/teacherapprove.php';
    }

    
    function Delete($id){
        $obj = new teacher;
        $obj->Delete($id);
        header('Location: http://localhost/OLearn/admin/teachers');
    }

    function updatet($id){
        $obj = new teacher;
        $obj->active = $_POST['active'];

        $obj->accept($id);
        header('Location: http://localhost/OLearn/admin/teachers');
    }
    function updatev($id){
        $obj = new video;
        $obj->active = $_POST['active'];

        $obj->accept($id);
        header('Location: http://localhost/OLearn/admin/videos');
    }

}



?>