<?php 

require_once "connection.php";

// ------------------------------- videos can be added by teachers and updated and deleted and can be accepted by the admin -DONE-

class video{
    public $video;
    public $title;
    public $dscr;
    public $grade;
    public $subject;
    public $lesson;
    public $thumbnail;
    public $adddate;
    public $active;
    
    static private $table="videos";

    function __construct(){
        $this->db = new Connection();
    }

    function getById($id){
        return $this->db->selectById($id);
    }

    function Addvideo(){
        return $this->db->add(self::$table, ["video", "title", "dscr", "grade", "subject", "lesson", "thumbnail", "adddate"], [$this->video, $this->title, $this->dscr, $this->grade, $this->subject, $this->lesson, $this->thumbnail, $this->adddate]);
    }

    function update($id){
        return $this->db->update(self::$table, ["title", "dscr", "grade", "subject", "lesson", "thumbnail"], [$this->title, $this->dscr, $this->grade, $this->subject, $this->lesson, $this->thumbnail], $id);
    }

    function accept($id){
        return $this->db->update(self::$table, ["active"], [$this->active], $id);
    }

    function delete($id){
        $this->db->delete(self::$table, $id);
    }
}

?>